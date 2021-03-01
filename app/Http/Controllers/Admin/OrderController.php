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
        $item = Item::all();
        $cat = Category::all();
        return view('admin.order.index', compact('carts','order','item','cat'));
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function orderStatusUpdate(Request $request){
        if(isset($request->order_id) && isset($request->order_status)){
          //save order status
          $uptStatus =DB::table('order')->where('id',$request->order_id)
          ->update(['status' => $request->order_status]);
  
          if($uptStatus){
            echo "Order " . $request->order_status;
          }
          else{
            echo "error";
          }
        }
      }
}
