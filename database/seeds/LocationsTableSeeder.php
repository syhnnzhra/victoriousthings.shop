<?php

use Illuminate\Database\Seeder;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Illuminate\Support\Facades\Http;
use App\Province;
use App\City;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::withHeaders([
            'key' => 'b102635f70187c8e0d6f02db01cc5c94'
        ])->get('https://api.rajaongkir.com/starter/province');
        $provinces = $response['rajaongkir']['results'];
        foreach($provinces as $a){
            $data_province[] = [
                'province_id'=>$a['province_id'],
                'title'=>$a['province']
            ];
        }
        $responsed = Http::withHeaders([
            'key' => 'b102635f70187c8e0d6f02db01cc5c94'
        ])->get('https://api.rajaongkir.com/starter/city');
        $city = $responsed['rajaongkir']['results'];
        foreach($city as $b){
            $data_city[] = [
                'city_id'=>$b['city_id'],
                'province_id'=>$b['province_id'],
                'title'=>$b['city_name'],
                'type'=>$b['type'],
                'postal_code'=>$b['postal_code']
            ];
        }
        Province::insert($data_province);
        City::insert($data_city);
        // $daftarProvinsi = RajaOngkir::provinsi()->all();
        // foreach ($daftarProvinsi as $provinceRow){
        //     Province::create([
        //         'province_id' => $provinceRow['province_id'],
        //         'title' => $provinceRow['province'],
        //     ]);
        //     $daftarKota=RajaOngkir::kota()->dariProvinsi($provinceRow['province_id'])->get();
        //     foreach ($daftarKota as $cityRow){
        //         City::create([
        //             'province_id'=>$provinceRow['province_id'],
        //             'city_id' => $cityRow['city_id'],
        //             'title' => $cityRow['city_name']
        //         ]);
        //     }
        // }
    }
}
