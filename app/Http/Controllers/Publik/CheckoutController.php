<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\User;
use App\Cart;
use App\Order;
use App\City;
use App\Province;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::where('user_id',Auth::user()->user_id)->where('status', 'Belum Dibayar')->get();
        $item = Item::first();
        $kota = City::all();
        $user = User::all();
        $pro = Province::all();
        return view('publik.cart.checkout', compact('carts','item','kota','pro','user'));
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
        $odet = Order::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'telephone' => $request->telephone,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
            'rincian_opsional' => $request->rincian_opsional,
            'bank' => $request->bank,
            'subtotal' => $request->subtotal
            ]);
        return redirect(route('ckbrng.show', ['id' => $odet->order_id]));
    }

    public function trans(){
        return redirect('transaction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'hi';
        // $carts = Cart::where('user_id',Auth::user()->id)->get();
        // $item = Item::first();
        // $kota = City::all();
        // $user = User::all();
        // $pro = Province::all();
        // return view('publik.cart.checkout', compact('carts','item','kota','pro','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'edit';
        // $carts = Cart::where('user_id',Auth::user()->id)->get();
        // $item = Item::first();
        // $kota = City::all();
        // $user = User::all();
        // $pro = Province::all();
        // return view('publik.cart.invoice', compact('carts','item','kota','pro','user'));
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

    public function generateInvoice($id)
    {
        $cart = Cart::findOrFail($id);
        $pdf = PDF::loadView('publik.cart.print', compact('cart'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
