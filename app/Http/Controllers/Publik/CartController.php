<?php

namespace App\Http\Controllers\Publik;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\Order;
use App\Cart;
use App\Transaction;
use App\User;
use App\City;
use App\Province;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function cart_tampil(){
        // $carts = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->get();
        $carts = Cart::where('order_id' , '0')->where('user_id', Auth::user()->id)->get();
        $sum = Cart::where('user_id',Auth::user()->id)->where('order_id', '0')->count('user_id');
        $item = Item::first();
        $brng = Item::all();
        // $sum = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->count('user_id');
        return view('publik.cart.index', compact('carts','item', 'brng','sum'));
    }

    public function updateCart(Request $request, $id){
        //
    }

    function index(){
        return view('publik.item.pesan');
    }

    function destroy($cart_id){
        $cart = Cart::FindOrFail($cart_id);
        $cart->delete();

        return redirect('/cart_tampil');
    }

    public function store(Request $request){
        // $order = Order::create([
        //     'user_id' => Auth::user()->id,
        //     'status' => $request->status,
        //     'note' => $request->note,
        //     'subtotal' => $request->subtotal
        // ]);
    }

    public function ckbrngedit($id){
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        $item = Item::first();
        $brng = Item::all();
        $kota = City::all();
        $user = User::all();
        $pro = Province::all();
        return view('publik.cart.checkout', compact('carts','brng', 'item','kota','pro','user'));
    }
    
    public function ckbrngshow($id){
        return 'ini ckbrng show';
    }

    function odetail($id){
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        $item = Item::first();
        $user = User::all();
        return view('publik.cart.checkout', compact('carts','item','user'));
    }

    public function saveodetail(Request $request, $id){
        $odet = Order::create([
            'user_id' => Auth::user()->id,
            'nama' => $request->nama,
            'telephone' => $request->telephone,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
            'rincian_opsional' => $request->rincian_opsional,
            'bank' => $request->bank
        ]);
        return redirect(route('ckbrng.show', ['id' => $odet->id]));
    }

    public function update(Request $request, $id){
        Cart::create([
            'user_id' => Auth::user()->id,
            'item_id' => $id,
            'order_id' => $request->order_id,
            'pesan' => $request->pesan,
            'status' => $request->status,
            'qty' => $request->qty
        ]);
        return redirect('/cart_tampil');
    }

        public function show($item_id)
        {
            $carts = Cart::where('user_id',Auth::user()->id)->get();
            $item = Item::findOrFail($item_id);
            $sum = Cart::where('user_id',Auth::user()->id)->where('order_id', '0')->count('user_id');
            $sweater = Item::where('kategori_id',2)->first();
            $aksesoris = Item::where('kategori_id',3)->first();
            $cardigan = Item::where('kategori_id',4)->first();
            $shirt = Item::where('kategori_id',5)->first();
            $sepatu = Item::where('kategori_id',6)->first();
            $bawahan = Item::where('kategori_id',7)->first();
            return view('publik.item.pesan', compact('carts','item','sum','sweater','aksesoris','cardigan','shirt','sepatu','bawahan'));
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



    function cart(){
        $cart = session("cart");
        return view('publik.cart.index')->with("cart",$cart);
    }
}
