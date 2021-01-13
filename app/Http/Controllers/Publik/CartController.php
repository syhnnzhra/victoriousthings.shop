<?php

namespace App\Http\Controllers\Publik;
use App\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function index(){
        return view('publik.item.pesan');
    }

    function do_tambah_cart($id){
        $cart = session("cart");
        $item = Item::detail_produk($id);
        $cart["id"]=[
            "nama"=>$item->$nama,
            "kategori_id"=>$item->$kategori_id,
            "stok"=>$item->$stok,
            "harga"=>$item->$harga,
            "keterangan"=>$item->$keterangan,
            "foto"=>$item->$foto,
            "jumlah"=>1
        ];
        session(["cart"=>$cart]);
        return redirect("/cart");
    }
    
    function cart(){
        $cart = session("cart");
        return view('publik.cart.index')->with("cart",$cart);
    }
}
