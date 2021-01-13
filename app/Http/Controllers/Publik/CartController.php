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

    public function show($id)
    {
        $data['item']=Item::findOrFail($id);
        return view('publik.item.pesan', $data);
    }

    function addToCart(Request $request){
        //VALIDASI DATA YANG DIKIRIM
        $this->validate($request, [
        'id' => 'required|exists:item,id', //PASTIKAN PRODUCT_IDNYA ADA DI DB
        'qty' => 'required|integer' //PASTIKAN QTY YANG DIKIRIM INTEGER
    ]);
        //AMBIL DATA CART DARI COOKIE, KARENA BENTUKNYA JSON MAKA KITA GUNAKAN JSON_DECODE UNTUK MENGUBAHNYA MENJADI ARRAY
        $carts = json_decode($request->cookie('dw-carts'), true); 

        //CEK JIKA CARTS TIDAK NULL DAN PRODUCT_ID ADA DIDALAM ARRAY CARTS
        if ($carts && array_key_exists($request->id, $carts)) {
            //MAKA UPDATE QTY-NYA BERDASARKAN PRODUCT_ID YANG DIJADIKAN KEY ARRAY
            $carts[$request->id]['qty'] += $request->qty;
        } else {
            //SELAIN ITU, BUAT QUERY UNTUK MENGAMBIL PRODUK BERDASARKAN PRODUCT_ID
            $item = Item::find($request->id);
            //TAMBAHKAN DATA BARU DENGAN MENJADIKAN PRODUCT_ID SEBAGAI KEY DARI ARRAY CARTS
            $carts[$request->id] = [
                'qty' => $request->qty,
                'nama' => $item->nama,
                'kategori_id' => $item->kategori_id,
                'stok' => $item->stok,
                'harga' => $item->harga,
                'keterangan' => $item->keterangan,
                'foto' => $item->foto
            ];
        }
        //BUAT COOKIE-NYA DENGAN NAME DW-CARTS
        //JANGAN LUPA UNTUK DI-ENCODE KEMBALI, DAN LIMITNYA 2800 MENIT ATAU 48 JAM
        $cookie = cookie('dw-carts', json_encode($carts), 2880);
        //STORE KE BROWSER UNTUK DISIMPAN
        return redirect()->back()->cookie($cookie);
    }

    public function listCart(){
        //MENGAMBIL DATA DARI COOKIE
        $carts = json_decode(request()->cookie('dw-carts'), true);
        //UBAH ARRAY MENJADI COLLECTION, KEMUDIAN GUNAKAN METHOD SUM UNTUK MENGHITUNG SUBTOTAL
        $subtotal = collect($carts)->sum(function($q) {
            return $q['qty'] * $q['harga']; //SUBTOTAL TERDIRI DARI QTY * PRICE
        });
        //LOAD VIEW CART.BLADE.PHP DAN PASSING DATA CARTS DAN SUBTOTAL
        // return 'hi';
        return view('publik.cart.index', compact('carts','subtotal'));
    }

    public function updateCart(Request $request){
        //AMBIL DATA DARI COOKIE
        $carts = json_decode(request()->cookie('dw-carts'), true);
        //KEMUDIAN LOOPING DATA PRODUCT_ID, KARENA NAMENYA ARRAY PADA VIEW SEBELUMNYA
        //MAKA DATA YANG DITERIMA ADALAH ARRAY SEHINGGA BISA DI-LOOPING
        foreach ($request->id as $key => $row) {
            //DI CHECK, JIKA QTY DENGAN KEY YANG SAMA DENGAN PRODUCT_ID = 0
            if ($request->qty[$key] == 0) {
                //MAKA DATA TERSEBUT DIHAPUS DARI ARRAY
                unset($carts[$row]);
            } else {
                //SELAIN ITU MAKA AKAN DIPERBAHARUI
                $carts[$row]['qty'] = $request->qty[$key];
            }
        }
        //SET KEMBALI COOKIE-NYA SEPERTI SEBELUMNYA
        $cookie = cookie('dw-carts', json_encode($carts), 2880);
        //DAN STORE KE BROWSER.
        // return 'hi';
        return redirect()->back()->cookie($cookie);
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
