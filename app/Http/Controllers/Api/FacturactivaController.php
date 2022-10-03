<?php

namespace App\Http\Controllers\Api;

use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Admin\PageField;
use App\Http\Controllers\Controller;

class FacturactivaController extends Controller
{
    public function generate_access_token()
    {
        $data = [
            'grant_type' => 'client_credentials',
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Basic NHZaYUVpMFpTdGdxTXFUcXlLRDNXMTpOMkZrTVdKbU5HTm1PVGRqTkRRMVl6bGtPV1prWm1FeE56SmhPV1kyWlRr',
            'Content-Type' => 'application/json',
        ])->post('https://dev.api.emisores.facturactiva.com/oauth2/token', $data);

        $response = $response->json();

        $updated = PageField::find(1);
        $updated->facturactiva_token = $response['access_token'];
        //$updated->facturactiva_token_created = Carbon::parse($response['expires_at'])->format('Y-m-d H:i:s');
        $updated->facturactiva_token_created = Carbon::now();
        $updated->save();

        return true;
    }
}
