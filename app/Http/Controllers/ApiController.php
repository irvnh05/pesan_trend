<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCities(Request $request)
    {
        $provinceId = $request->get('province_id');
        $client = new Client();
        $response = $client->get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/{$provinceId}");
        $cities = json_decode($response->getBody(), true);

        return response()->json($cities);
    }

    public function getProvinces()
    {
        $client = new Client();
        $response = $client->get("https://emsifa.github.io/api-wilayah-indonesia/api/provinces");
        $provinces = json_decode($response->getBody(), true);

        return response()->json($provinces);
    }
}
