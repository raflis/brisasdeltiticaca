<?php

namespace App\Http\Controllers\Web;

use Http;
use Auth;
use Hash;
use Mail;
use Validator;
use Lyra\Client;
use Lyra\Constants;
use App\Models\User;
use App\Models\Admin\Sale;
use App\Models\Admin\Zone;
use App\Models\Admin\Event;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use Illuminate\Support\Carbon;
use App\Models\Admin\PageField;
use PHPUnit\Framework\TestCase;
use App\Models\Admin\WorkshopEvent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FacturactivaController;

class CheckoutController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }

    private function getCredentials()
    {
        $credentials = array();
        $credentials["username"] = "80666905";
        $credentials["password"] = "testpassword_798LlNMaUDIP7jW61OHaAfKSh8rK4RLKLUK5GrYL80AAA"; //qa
        /*$credentials["password"] = "prodpassword_o2VHZYgmFIArPIj6b2wgLJfL8d2t5lYMWg7tu4ArkRkQu";*/ //produccion
        $credentials["endpoint"] = "https://api.micuentaweb.pe";
        $credentials["publicKey"] = "80666905:testpublickey_kcibOSUY7y7vYxXLe7me2UCzKGHViMClAkdOdv2qGYn21"; //qa
        /*$credentials["publicKey"] = "80666905:publickey_lRhVscZtJcZ3oyY6AON2Sii4HhvN5xbzAk4GPkkSCEIgV";*/ //produccion
        $credentials["sha256Key"] = "UlpPgjGwIph4U1Sz6EkBkHqq6gFgBWVZNmGee4oq2Qhvn"; //qa
        /*$credentials["sha256Key"] = "6dJBEAeLcY4sfn4C6H84FsTNzikKq9xOlUPbHEd9BUq24";*/ //produccion

        return $credentials;
    }

    public function index()
    {
        return view('web.checkout.index');
    }

    public function payment(Request $request)
    {
        $client = new Client();
        $credentials = $this->getCredentials();
        $client->setUsername($credentials['username']);
        $client->setPassword($credentials['password']);
        $client->setEndpoint($credentials['endpoint']);
        $client->setPublicKey($credentials['publicKey']);
        $client->setSHA256Key($credentials['sha256Key']);
        
        $data = $request;
        $cart = session('cart');

        $data_invoice = [
            'user_name' => $request->name,
            'user_lastname' => $request->lastname,
            'user_document' => $request->document,
            'user_address' => $request->address,
            'user_telephone' => $request->telephone,
            'user_email' => $request->email,
        ];
        session()->put('invoice', $data_invoice);

        $total_price = 0;
        foreach($cart as $id => $details):
            $total_price += $details['price'];
        endforeach;

        foreach(session('cart') as $id => $details):
            $itemsCart[] = [
                "productLabel" => $details['name'],
                "productQty" => 1,
                "productAmount" => $details['price'] * 1
            ];
        endforeach;

        $store = array(
            "amount" => $total_price*100, 
            "currency" => "PEN", 
            "orderId" => uniqid("MyOrderId"),
            "formAction" => "REGISTER_PAY",
            "customer" => array(
                "email" => $request->email,
                "billingDetails" => array(
                  "firstName" => $request->name,
                  "lastName" => $request->lastname,
                  "phoneNumber" => $request->telephone,
                  "address" => $request->address,
                  "district" => '',
                  "city" => '',
                  "identityCode" => $request->document
                )
            ),
            "shoppingCart" => array(
                "cartItemInfo" => 
                    $itemsCart
            ),
        );

        $token = $client->post("V4/Charge/CreatePayment", $store);
        $token= $token["answer"]["formToken"];

        return view('web.checkout.payment', compact('data', 'cart', 'total_price', 'credentials', 'token'));
    }

    public function confirmation(Request $request)
    {
        $client = new Client();
        $answer = $client->getParsedFormAnswer();
        $invoice = session('invoice');

        $credentials = $this->getCredentials();
        $client->setUsername($credentials['username']);
        $client->setPassword($credentials['password']);
        $client->setEndpoint($credentials['endpoint']);
        $client->setPublicKey($credentials['publicKey']);
        $client->setSHA256Key($credentials['sha256Key']);

        $checkhash = $client->checkHash();

        $hash0 = $client->getLastCalculatedHash();
        $hash = $request->get('kr-hash');
        $hash_ans = $answer['kr-answer']['transactions'][0]['uuid'];
        $paymentMethodToken = $answer['kr-answer']['transactions'][0]['paymentMethodToken'];

        $carbon = new \Carbon\Carbon();
        $date = $carbon->tomorrow();
        $date = $date->format('Y-m-d');

        if($answer['kr-answer']['orderStatus'] == "PAID"):
            /*foreach(session('cart') as $id => $details):
                //$freq = ($details['payment_frequency']=="monthly")?"MONTHLY":"YEARLY";
                $freq = "MONTHLY";
                $paramSus = array(
                    "amount" => $details['price'] * 1 * 100,
                    "currency" => "PEN",
                    "effectDate" => $date."T21:50:34+00:00",
                    "paymentMethodToken" => $paymentMethodToken,
                    "rrule" => "RRULE:FREQ=".$freq.";INTERVAL=1;COUNT=90"
                );
                $suscription = $client->post("V4/Charge/CreateSubscription", $paramSus);
                //dd($suscription);
            endforeach;*/

            $data_sale = [
                'user_id' => Auth::user()->id,
                'amount' => $answer['kr-answer']['transactions'][0]['amount']/100,
                'currency' => $answer['kr-answer']['transactions'][0]['currency'],
                'purchase_number' => $answer['kr-answer']['orderDetails']['orderId'],
                'transaction_date' => \Carbon\Carbon::now(),
                'operationType' => $answer['kr-answer']['transactions'][0]['operationType'],
                'effectiveBrand' => $answer['kr-answer']['transactions'][0]['transactionDetails']['cardDetails']['effectiveBrand'],
                'card' => $answer['kr-answer']['transactions'][0]['transactionDetails']['cardDetails']['pan'],
                'status' => $answer['kr-answer']['transactions'][0]['status'],
                'detail' => session('cart'),
                'paid' => 1,
                'user_name' => $invoice['user_name'],
                'user_lastname' => $invoice['user_lastname'],
                'user_document' => $invoice['user_document'],
                'user_telephone' => $invoice['user_telephone'],
                'user_address' => $invoice['user_address'],
                'user_email' => $invoice['user_email'],
            ];
            $recorded = Sale::create($data_sale);

            foreach(session('cart') as $id => $details):
                $updated = WorkshopEvent::find($id);
                $updated->stock = $updated->stock - 1;
                $updated->save();
            endforeach;
    
            $data_mail = $data_sale;
            $email = $invoice['user_email'];
            $data_mail['name_email'] = ucfirst($invoice['user_name']);
            Mail::send('web.emails.sale_confirmation', $data_mail, function($message) use ($email, $data_mail)
            {
                $message->to($email)->subject($data_mail['name_email'].', Gracias por tu compra');
            });

            /* Facturación electrónica */

            $pagefield = PageField::find(1);
            $facturactiva_token = $pagefield->facturactiva_token;
            $now = Carbon::now();
            $minutes = $now->diffInMinutes($pagefield->facturactiva_token_created);
            if($minutes >= 400):
                $soho = new FacturactivaController();
                $soho->generate_access_token();
                $pagefield0 = PageField::find(1);
                $facturactiva_token = $pagefield0->facturactiva_token;
            endif;

            $total_amount = $answer['kr-answer']['transactions'][0]['amount']/100;

            foreach(session('cart') as $id => $details):
                $detalle[] = [
                    "cantidadItem" => 1,
                    "unidadMedidaItem" => "ZZ",
                    "nombreItem" => $details['name'],
                    "precioItem" => $details['price'],
                    "precioItemSinIgv" => round(($details['price']/1.18), 2),
                    "montoItem" => round(($details['price']/1.18), 2),
                    "codAfectacionIgv" => "10",
                    "tasaIgv" => 0.18,
                    "montoIgv" => round(($details['price'] - round(($details['price']/1.18), 2)), 2),
                    "idOperacion" => "1",
                    "codItem" => "STC"
                ];
            endforeach;

            $data = [
                "correoReceptor" => $invoice['user_email'],
                "tipoDocumento" => "03",
                "fechaEmision" => Carbon::now()->format('Y-m-d'),
                "idTransaccion" => "03-20538843939-BW01-".$recorded->id,
                "documento" => array(
                    "serie" => "BW01",
                    "correlativo" => $recorded->id,
                    "nombreEmisor" => "ASOCIACION CULTURAL BRISAS DEL TITICACA",
                    "tipoDocEmisor" => "6",
                    "numDocEmisor" => "20100642281",
                    "direccionOrigen" => "Cal. Heroes de Tarapaca Nro. 168",
                    "direccionUbigeo" => "140101",
                    "tipoMoneda" => "PEN",
                    "mntTotalIgv" => round(($total_amount - round(($total_amount/1.18), 2)), 2),
                    "mntTotal" => $total_amount,
                    "tipoFormatoRepresentacionImpresa" => "GENERAL",
                    "tipoDocReceptor" => "0", //montos mayores a 700 usar "1" y enviar documento real
                    "numDocReceptor" => $invoice['user_document'],
                    "nombreReceptor" => $invoice['user_name'].' '.$invoice['user_lastname'],
                    "direccionDestino" => $invoice['user_address'],
                    "fechaVencimiento" => Carbon::now()->format('Y-m-d'),
                    "mntNeto" => round(($total_amount/1.18), 2)
                ),
                "impuesto" => array(
                    array(
                        "codImpuesto" => "1000",
                        "montoImpuesto" => round(($total_amount - round(($total_amount/1.18), 2)), 2),
                        "tasaImpuesto" => 0.18
                    )
                ),
                "detalle" => $detalle
            ];

            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$facturactiva_token,
                'Content-Type' => 'application/json',
            ])->post('https://dev.api.emisores.facturactiva.com/emission/documents', $data);

            /* Facturación electrónica */
    
            session()->forget('cart');
            session()->forget('invoice');
            return view('web.checkout.confirmation', compact('answer'));
        else:
            return view('web.checkout.cart');
        endif;
    }

    public function addToCart(Request $request)
    {
        $id = $request->id;
        $workshop_event = WorkshopEvent::find($id);
        
        if(!$workshop_event) {
            return response()->json(['success' => 'Taller no encontrado']);
        }

        $total = 0;
        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $workshop_event->name,
                        "image" => $workshop_event->image1,
                        "event_date" => $workshop_event->event_date,
                        "category" => $workshop_event->workshop->name,
                        "url" => route('workshop_event', [$workshop_event->slug, $workshop_event->id]),
                        "price" => $workshop_event->price,
                    ]
            ];
            session()->put('cart', $cart);
            foreach ($cart as $id => $details) {
                $total += $details['price'];
            }
            return response()->json(['success' => true, 'product' => $cart[$id], 'cart' => $cart, 'total' => $total]);
        }

        if(isset($cart[$id])) {
            foreach ($cart as $id => $details) {
                $total += $details['price'];
            }
            return response()->json(['success' => true, 'product' => $cart[$id], 'cart' => $cart, 'total' => $total]);
        }

        $cart[$id] = [
            "name" => $workshop_event->name,
            "image" => $workshop_event->image1,
            "event_date" => $workshop_event->event_date,
            "category" => $workshop_event->workshop->name,
            "url" => route('workshop_event', [$workshop_event->slug, $workshop_event->id]),
            "price" => $workshop_event->price,
        ];
        session()->put('cart', $cart);
        foreach ($cart as $id => $details) {
            $total += $details['price'];
        }
        return response()->json(['success' => true, 'product' => $cart[$id], 'cart' => $cart, 'total' => $total]);
    }

    public function removeFromCart(Request $request)
    {
        $total = 0;
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                foreach ($cart as $id => $details) {
                    $total += $details['price'];
                }
                return response()->json(['success' => true, 'cart' => $cart, 'total' => $total]);
            }
            return response()->json(['success' => false]);
        }
    }

    public function updateCart(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            return response()->json(['success' => true]);
        }
    }
}
