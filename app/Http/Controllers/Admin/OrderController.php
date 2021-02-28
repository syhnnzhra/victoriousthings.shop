<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Cart;
use App\Category;
use App\Item;
use App\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::where('status', 'Sudah Dibayar')->get();
        $order = Order::all();
        $sum = Cart::where('status', 'Sudah Dibayar')->where('order_id', $order)->count();
        $item = Item::all();
        $cat = Category::all();
        return view('admin.order.index', compact('carts','order','item','cat','sum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['item']=Item::all();
        return view('admin.order.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order=new Order;
        $order->item_id=$request->item_id;
        $order->quantity=$request->quantity;
        $order->status=$request->status;
        $order->save();

        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {
        $det = Order::findOrFail($order_id);
        $item = Item::all();
        $carts = Cart::where('status', 'Sudah Dibayar')->where('order_id', $order_id)->get();
        return view('admin.order.show', compact('det','item','carts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::all();
        $order = Order::FindOrFail($id);
        return view('admin.order.edit', compact('order', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::FindOrFail($id);
        $order->item_id=$request->item_id;
        $order->quantity=$request->quantity;
        $order->status=$request->status;
        $order->save();
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::FindOrFail($id);
        $order->delete();

        return redirect()->route('order.index');
    }
}
