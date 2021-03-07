<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use App\City;
use App\Province;
use App\Courier;

class CheckOngkirController extends Controller
{
    public function index()
    {
        return 'ongkir';
        // $couriers = Courier::pluck('title', 'code');
        // $provinces = Province::pluck('title', 'province_id');
        // return view('publik.cart.checkout', compact('provinces', 'couriers'));
    }
    public function getCities($city_id)
    {
        $city = City::where('province_id', $city_id)->pluck('title', 'city_id');
        return response()->json($city);
    }
    public function check_ongkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => $request->city_origin, // ID kota/kabupaten asal
            'destination'   => $request->city_destination, // ID kota/kabupaten tujuan
            'weight'        => $request->weight, // berat barang dalam gram
            'courier'       => $request->courier // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();
        dd($cost);
        // return response()->json($cost);
    }
}
