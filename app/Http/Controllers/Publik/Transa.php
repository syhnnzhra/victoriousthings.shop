<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\User;
use App\Cart;
use App\Order;
use App\Order_Detail;
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
    public function store(Request $reques, $id)
    {
        // order detail
        try {
            $order = Order::find($id);
                Order_Detail::create([
                    'order_id' => $order->id,
                    'nama' => $request->nama,
                    'telephone' => $request->telephone,
                    'alamat' => $request->alamat,
                    'kota' => $request->kota,
                    'provinsi' => $request->provinsi,
                    'kode_pos' => $request->kode_pos,
                    'rincian_opsional' => $request->rincian_opsional,
                    'bank' => $request->bank
                ]);
            return redirect(route('checkout.edit', ['id' => $order->id]));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        // Order_Detail::create([
        //     'order_id' => $order->id,
        //     'nama' => $request->nama,
        //     'telephone' => $request->telephone,
        //     'alamat' => $request->alamat,
        //     'kota' => $request->kota,
        //     'provinsi' => $request->provinsi,
        //     'kode_pos' => $request->kode_pos,
        //     'rincian_opsional' => $request->rincian_opsional,
        //     'bank' => $request->bank
        // ]);            
        // return redirect(route('checkout.edit', ['id' => $order->id]));


        //MENYIMPAN DATA KE TABLE INVOICES
        // $order = Order::create([
        //     'user_id' => Auth::user()->id,
        //     'status' => $request->status,
        //     'note' => $request->note,
        //     'subtotal' => $request->subtotal
        // ]);

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
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        $item = Item::first();
        $kota = City::all();
        $order = Order::findOrFail($id);
        $user = User::all();
        $pro = Province::all();
        return view('publik.cart.invoice', compact('carts','item','kota','pro','user','order'));
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
        $order = Order::findOrFail($id);
        $pdf = PDF::loadView('publik.cart.print', compact('order'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
