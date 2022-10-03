<?php

namespace App\Http\Controllers\Web;

use Str;
use Auth;
use Hash;
use Storage;
use Validator;
use Lyra\Client;
use Lyra\Constants;
use App\Models\User;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Models\Admin\PageField;
use PHPUnit\Framework\TestCase;
use App\Models\Admin\Subscription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class ProfileController extends Controller
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

    public function workshops()
    {
        return view('web.profile.workshops');
    }

    public function membership()
    {
        $pagefield = PageField::find(1);
        $price_membership = $pagefield->subscription_price;

        $client = new Client();
        $credentials = $this->getCredentials();
        $client->setUsername($credentials['username']);
        $client->setPassword($credentials['password']);
        $client->setEndpoint($credentials['endpoint']);
        $client->setPublicKey($credentials['publicKey']);
        $client->setSHA256Key($credentials['sha256Key']);

        $itemsCart[] = [
            "productLabel" => 'Membresia socio',
            "productQty" => 1,
            "productAmount" => $price_membership
        ];

        $store = array(
            "amount" => $price_membership*100, 
            "currency" => "PEN", 
            "orderId" => uniqid("MyOrderId"),
            "formAction" => "REGISTER_PAY",
            "customer" => array(
                "email" => Auth::user()->email,
                "billingDetails" => array(
                  "firstName" => Auth::user()->name,
                  "lastName" => Auth::user()->lastname,
                  "phoneNumber" => rand(900000000, 999999999),
                  "address" => '',
                  "district" => '',
                  "city" => '',
                  "identityCode" => Auth::user()->document
                )
            ),
            "shoppingCart" => array(
                "cartItemInfo" => 
                    $itemsCart
            ),
        );

        $token = $client->post("V4/Charge/CreatePayment", $store);
        $token = $token["answer"]["formToken"];

        if(Auth::user()->membership == 'active'):
            $subscription = Subscription::where('user_id', Auth::user()->id)->where('status', 'PAID')->orderBy('created_at', 'Desc')->first();
            return view('web.profile.membership', compact('credentials', 'token', 'subscription'));
        endif;
        
        return view('web.profile.membership', compact('credentials', 'token'));
    }

    public function membershipPost(Request $request)
    {
        $client = new Client();
        $answer = $client->getParsedFormAnswer();

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
            //$freq = ($details['payment_frequency']=="monthly")?"MONTHLY":"YEARLY";
            $freq = "MONTHLY";
            $paramSus = array(
                "amount" => ($answer['kr-answer']['transactions'][0]['amount']/100) * 100,
                "currency" => "PEN",
                "effectDate" => $date."T21:50:34+00:00",
                "paymentMethodToken" => $paymentMethodToken,
                "rrule" => "RRULE:FREQ=".$freq.";INTERVAL=1;COUNT=90"
            );
            $suscription = $client->post("V4/Charge/CreateSubscription", $paramSus);
            //dd($suscription);

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
                'detail' => 'Membresia socio',
                'paid' => 1,
                'paymentMethodToken' => $answer['kr-answer']['transactions'][0]['paymentMethodToken'],
                'subscriptionId' => $suscription['answer']['subscriptionId'],
                'user_name' => Auth::user()->name,
                'user_lastname' => Auth::user()->lastname,
                'user_document' => Auth::user()->document,
                'user_telephone' => '',
                'user_address' => Auth::user()->country,
                'user_email' => Auth::user()->email,
            ];

            $recorded = Subscription::create($data_sale);

            $updated = User::find(Auth::user()->id);
            $updated->membership = 'active';
            $updated->save();

            return redirect()->route('profile.membership')->with('message', 'Suscripción creada con éxito.')->with('typealert', 'success');
        endif;
    }

    public function membershipCancel(Request $request)
    {
        $client = new Client();
        $credentials = $this->getCredentials();
        $client->setUsername($credentials['username']);
        $client->setPassword($credentials['password']);
        $client->setEndpoint($credentials['endpoint']);
        $client->setPublicKey($credentials['publicKey']);
        $client->setSHA256Key($credentials['sha256Key']);

        if(Auth::user()->membership == 'active'):
            $subscription = Subscription::where('user_id', Auth::user()->id)->where('status', 'PAID')->orderBy('created_at', 'Desc')->first();
            $subs = array(
                "paymentMethodToken" => $subscription->paymentMethodToken,
                "subscriptionId" => $subscription->subscriptionId
            );
            $subscription_cancel = $client->post("V4/Subscription/Cancel", $subs);
            if($subscription_cancel['status'] == 'SUCCESS'):
                $updated = User::find(Auth::user()->id);
                $updated->membership = 'cancelled';
                $updated->save();

                $subscription->status = 'CANCELLED';
                $subscription->save();
                return redirect()->route('profile.membership')->with('message', 'Suscripción cancelada con éxito.')->with('typealert', 'success');
            else:
                return redirect()->route('profile.membership')->with('message', 'Ocurrio un error al intentar cancelar la suscripción.')->with('typealert', 'danger');
            endif;
        endif;
    }

    public function index()
    {
        $countries = [
            '' => 'Selecciona tu país',
            'Perú' => 'Perú',
            'Colombia' => 'Colombia',
        ];

        $genders = [
            '' => 'Seleccione su género',
            'Masculino' => 'Masculino',
            'Femenino' => 'Femenino',
        ];

        $type_document = [
            '' => 'Seleccione su tipo de documento',
            'DNI' => 'DNI',
            'Pasaporte' => 'Pasaporte',
            'Carnet de extranjería' => 'Carnet de extranjería',
        ];

        return view('web.profile.index', compact('countries', 'genders', 'type_document'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $rules=[
            'name'=>'required',
            'lastname'=>'required',
            'newpassword'=>'nullable|min:8',
            'renewpassword'=>'nullable|min:8|same:newpassword',
            'country'=>'required',
            'document'=>'required',
            'type_document'=>'required',
            'birthday'=>'required',
        ];

        $messages=[
            'name.required' => 'Ingresa tu nombre',
            'lastname.required' => 'Ingresa tu apellido',
            'newpassword.min' => 'La nueva contraseña debe tener al menos 8 caracteres',
            'renewpassword.min' => 'La nueva contraseña debe tener al menos 8 caracteres',
            'renewpassword.same' => 'Las contraseñas no coinciden.',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            if(Auth::user()->id <> $id):
                return back()->withErrors($validator)->with('message', '¿Qué haces? o.O')->with('typealert', 'danger')->withInput();
            endif;

            if($request->newpassword && $request->renewpassword):
                if($request->newpassword === $request->renewpassword):
                    $request->merge(['password' => Hash::make($request->newpassword)]);
                else:
                    return back()->withErrors($validator)->with('message', 'La contraseñas no coinciden')->with('typealert', 'danger')->withInput();
                endif;
            endif;

            if($request->hasFile('avatar_front')):
                if($request->file('avatar_front')->isValid()):
                    $image = $request->file('avatar_front');
                    $fileName = $image->getClientOriginalName();
                    $fileName = Str::slug(explode('.',  $fileName)[0]);
                    $fileExt = trim($image->getClientOriginalExtension());
                    $name = $fileName.'__'.time().'.'.$fileExt;
                    Storage::disk('profiles')->delete(Auth::user()->avatar);
                    Storage::disk('profiles')->put($name, file_get_contents($image));
                    $request->merge(['avatar' => $name]);
                    
                endif;
            endif;
            
            $user = User::find(Auth::user()->id);
            $user->fill($request->all())->save();
            return back()->with('message', 'Datos actualizados con éxito')->with('typealert', 'success');
        endif;
    }
}
