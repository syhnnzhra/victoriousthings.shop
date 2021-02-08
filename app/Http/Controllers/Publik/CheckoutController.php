<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\Cart;
use App\Order;
use App\Order_Detail;
use App\User;
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
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        $item = Item::first();
        $kota = City::all();
        $order = Order::all();
        $user = User::all();
        $pro = Province::all();
        return view('publik.cart.checkout', compact('carts','item','kota','pro','user','order'));
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
        
        // Cart::create([
        //     'user_id' => Auth::user()->id,
        //     'cart_id' => $cart_id,
        //     'subtotal' => $request->subtotal
        // ]);
        $odetail=new Order_Detail;
        $category->order_id=$request->order_id;
        $category->nama=$request->nama;
        $category->telephone=$request->telephone;
        $category->alamat=$request->alamat;
        $category->kode_pos=$request->kode_pos;
        $category->rincian_opsional=$request->rincian_opsional;
        $category->bank=$request->bank;
        $category->save();
        return 'data masuk';
        // return redirect()->route('checkout.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
