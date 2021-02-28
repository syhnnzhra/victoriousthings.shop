<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $primaryKey = 'item_id';
    public $incrementing = false;
    // public function Category()
    // {
    //     return $this->belongsTo('App\Category','kategori_id','item_id');
    // }
    public function Category()
    {
        return $this->belongsTo('App\Category', 'kategori_id','item_id');
    }
    public function Cart()
    {
        return $this->hasMany('App\Cart', 'cart_id');
    }
    public function Incoming_Item()
    {
        return $this->hasMany('App\Incoming_Item','incoming_id','item_id');
    }
    public function Transaction()
    {
        return $this->hasMany('App\Transaction','trans_id','item_id');
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

    // static function detail_produk($id){
        // $datas = Item::where('id', $id)->get();
    //     $data=Item::where('id',$id)->first();
    //     return $data;
    // }
}