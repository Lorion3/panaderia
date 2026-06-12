<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GeoController extends Controller
{
    public function buscar(Request $request)
    {
        $direccion = $request->input('direccion', 'Zapopan, Jalisco');

        $response = Http::get('https://www.mapquestapi.com/geocoding/v1/address', [
            'key' => config('services.mapquest.key'),
            'location' => $direccion
        ]);

        return $response->json();
    }
}
