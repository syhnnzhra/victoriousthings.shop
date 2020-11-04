<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order_Detail;
use App\Order;
use Illuminate\Http\Request;

class OdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderdetail = Order_Detail::all();
        return view('admin.orderdetail.index', compact('orderdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['order']=Order::all();
        return view('admin.orderdetail.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orderdetail=new Order_Detail;
        $orderdetail->order_id=$request->order_id;
        $orderdetail->harga=$request->harga;
        $orderdetail->jumlah=$request->jumlah;
        $orderdetail->pembayaran=$request->pembayaran;
        $orderdetail->order_address=$request->order_address;
        $orderdetail->email=$request->email;
        $orderdetail->tanggal=$request->tanggal;
        $orderdetail->status=$request->status;
        $orderdetail->save();
        return redirect()->route('Odetail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Odetail  $odetail
     * @return \Illuminate\Http\Response
     */
    public function show(Odetail $odetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Odetail  $odetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::all();
        $orderdetail = Order_Detail::FindOrFail($id);
        return view('admin.orderdetail.edit', compact('orderdetail','order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Odetail  $odetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $orderdetail = Order_Detail::FindOrFail($id);
        $orderdetail->order_id=$request->order_id;
        $orderdetail->harga=$request->harga;
        $orderdetail->jumlah=$request->jumlah;
        $orderdetail->pembayaran=$request->pembayaran;
        $orderdetail->order_address=$request->order_address;
        $orderdetail->email=$request->email;
        $orderdetail->tanggal=$request->tanggal;
        $orderdetail->status=$request->status;
        $orderdetail->save();
        return redirect()->route('Odetail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Odetail  $odetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderdetail = Order_Detail::FindOrFail($id);
        $orderdetail->delete();

        return redirect()->route('Odetail.index');
    }
}
