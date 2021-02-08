<?php

namespace App\Http\Controllers\Publik;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function cart_tampil(){
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        $item = Item::first();
        // $subtotal = Cart::where('user_id',Auth::user()->id)->groupBy('item_id')->count();
        // return $subtotal;z
        return view('publik.cart.index', compact('carts','item'));
    }

    function index(){
        return view('publik.item.pesan');
    }

    function destroy($id){
        $cart = Cart::FindOrFail($id);
        $cart->delete();

        return redirect('/cart_tampil');
    }

    public function update(Request $request, $id){
        Cart::create([
            'user_id' => Auth::user()->id,
            'item_id' => $id,
            'pesan' => $request->pesan,
            // 'total' => $request->total,
            'qty' => $request->qty
        ]);
            return redirect('/cart_tampil');
        }

        public function show($id)
        {
            $carts = Cart::where('user_id',Auth::user()->id)->get();
            $item = Item::findOrFail($id);
            // $subtotal = collect($carts)->sum(function($q) {
            //     return $q['qty'] * $q['harga']; //SUBTOTAL TERDIRI DARI QTY * PRICE
            // });
            return view('publik.item.pesan', compact('carts','item'));
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
