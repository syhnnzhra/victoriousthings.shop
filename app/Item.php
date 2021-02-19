<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function Category()
    {
        return $this->belongsTo('App\Category','kategori_id','id');
    }
    public function Cart()
    {
        return $this->hasMany('App\Cart','item_id','id');
    }
    public function Incoming_Item()
    {
        return $this->hasMany('App\Incoming_Item','item_id','id');
    }
    public function Transaction()
    {
        return $this->hasMany('App\Transaction','trans_id','id');
    }



    static function list_produk(){
        $data=Item::all();
        return $data;
    }

    static function tambah_item($nama, $kategori_id, $stok, $harga, $keterangan, $foto){
        Item::create([
            "nama"=>$nama,
            "kategori_id"=>$kategori_id,
            "stok"=>$stok,
            "harga"=>$harga,
            "keterangan"=>$keterangan,
            "foto"=>$foto,
        ]);
    }

    static function detail_produk($id){
        // $datas = Item::where('id', $id)->get();
        $data=Item::where('id',$id)->first();
        return $data;
    }
}