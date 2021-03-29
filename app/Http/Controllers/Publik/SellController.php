<?php

namespace App\Http\Controllers\publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Incoming_Item;
use File;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sum = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->count('user_id');
        $sum = Cart::where('user_id',Auth::user()->id)->where('order_id', '0')->count('user_id');
        $incom = Incoming_Item::where('user_id', Auth::user()->id)->get();
        // return $incom;
        return view('publik.sell.index', compact('sum','incom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sum = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->count('user_id');
        return view('publik.sell.create', compact('sum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item= new Incoming_Item;
        $item->item=$request->item;
        $item->user_id = Auth::user()->id;
        $item->gopay=$request->gopay;
        $item->jumlah=$request->jumlah;
        $item->harga=$request->harga;
        $item->subtotal=$request->subtotal;
        $item->status="Pending";

        $foto =$request->foto;
        $imageName = time().'.'.
        $foto->extension();
        $request->foto->move(public_path().'/incom_item', $imageName);
        $item->foto = $imageName;
        $item->save();

        return redirect('/sell');
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
    public function update(Request $request, $incoming_id)
    {
        $brng = Incoming_Item::FindOrFail($incoming_id);
        $brng->resi=$request->resi;
        $brng->save();
        return redirect('/sell');
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
