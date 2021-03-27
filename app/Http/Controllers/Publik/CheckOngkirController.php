<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use App\City;
use App\Province;
use App\Courier;

class CheckOngkirController extends Controller
{
    public function index()
    {
        $origin = 501;
        $destination = 114;
        $weight = 1700;
        $courier = "jne";
        $response = Http::asForm()->withHeaders([
            'key' => 'b102635f70187c8e0d6f02db01cc5c94'
        ])->post('https://api.rajaongkir.com/starter/cost',[
            'origin' => $origin,
            'destination' => $destination,
            'weight' => $weight,
            'courier' => $courier
        ]);
        return $response['rajaongkir']['results'];
        // $couriers = Courier::pluck('title', 'code');
        // $provinces = Province::pluck('title', 'province_id');
        // return view('publik.cart.checkout', compact('provinces', 'couriers'));
    }

    public function getCities($province_id)
    {
        $city = City::where('province_id', $province_id)->pluck('title', 'city_id');
        return json_encode($city);
        // return response()->json($city);
    }

    public function check_ongkir(Request $request)
    {
        $destination = $request->destination;
        $weight = $request->weight;
        $courier = $request->courier;
        $cost = Http::asForm()->withHeaders([
            'key' => 'b102635f70187c8e0d6f02db01cc5c94'
        ])->post('https://api.rajaongkir.com/starter/cost',[
            'origin' => 23,
            'destination' => $destination,
            'weight' => $weight,
            'courier' => $courier
            ]);
        return $cost['rajaongkir']['results'];
        // return response()->json($cost);
        // $cost = RajaOngkir::ongkosKirim([
        //     'origin'        => 23,
        //     'destination'   => $request->city_destination,
        //     'weight'        => $request->weight,
        //     'courier'       => $request->courier
        // ])->get();
        // return redirect('/checkout', compact($cost));
    }
}
