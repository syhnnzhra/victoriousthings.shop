<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Cart;
use App\Item;
use App\User;
use App\Order;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $odetail = Order::orderBy('updated_at', 'desc')->get();
        $odetail = Order::where('user_id', Auth::user()->user_id)->get();
        $item = Item::all();
        $carts = Cart::where('status', 'Sudah Dibayar')->where('user_id',Auth::user()->user_id)->get();
        return view('publik.invoice.index', compact('carts','odetail','item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'item' => 'required',
        // ]);
        // $user = Auth::user()->id;
        // $item = Item::findOrFail($request->item_id);
        // // cek dulu apakah sudah ada produk di shopping cart
        // $trans = Transaction::where('cart_id', 'item_id')->first();
        // $qty = 1;// diisi 1, karena kita set ordernya 1
        // $harga = $item->harga;//ambil harga produk
        // // $diskon = $itemproduk->promo != null ? $itemproduk->promo->diskon_nominal: 0;
        // $subtotal = ($qty * $harga) - $diskon;
        // // diskon diambil kalo produk itu ada promo, cek materi sebelumnya
        // if ($trans) {
        //     // update detail di table cart_detail
        //     $trans->updatedetail($trans, $qty, $harga);
        //     // update subtotal dan total di table cart
        //     $trans->cart->updatetotal($trans->order, $subtotal);
        // } else {
        //     $inputan = $request->all();
        //     $inputan['cart_id'] = $itemcart->id;
        //     $inputan['produk_id'] = $itemproduk->id;
        //     $inputan['qty'] = $qty;
        //     $inputan['harga'] = $harga;
        //     $inputan['diskon'] = $diskon;
        //     $inputan['subtotal'] = ($harga * $qty) - $diskon;
        //     $itemdetail = CartDetail::create($inputan);
        //     // update subtotal dan total di table cart
        //     $itemdetail->cart->updatetotal($itemdetail->cart, $subtotal);
        // }
        // return redirect()->route('cart.index')->with('success', 'Produk berhasil ditambahkan ke cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {
        // $p = Cart::where('status', 1)->first();
        $order = Order::where('user_id',Auth::user()->id)->get();
        $det = Order::findOrFail($order_id);
        $item = Item::all();
        $sum = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->count('user_id');
        $carts = Cart::where('status', 'Completed')->where('user_id',Auth::user()->id)->where('order_id', $order_id)->get();
        return view('publik.invoice.edit', compact('item', 'det', 'carts','sum'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $order = Order::where('user_id',Auth::user()->id)->get();
        // $det = Order::findOrFail($id);
        // $item = Item::all();
        // $carts = Cart::where('user_id',Auth::user()->id)->get();
        // return view('publik.invoice.edit', compact('item', 'det', 'carts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
