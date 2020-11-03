<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Incoming_Item;
use Illuminate\Http\Request;
use App\Item;
use App\Distributor;

class IncomingitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang_masuk = Incoming_Item::all();
        return view('admin.barang_masuk.index', compact('barang_masuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['distributor']=Distributor::all();
        return view('admin.barang_masuk.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brng=new Incoming_Item;
        $brng->item_id=$request->item_id;
        $brng->distributor_id=$request->distributor_id;
        $brng->tanggal=$request->tanggal;
        $brng->jumlah=$request->jumlah;
        $brng->harga=$request->harga;
        $brng->subtotal=$request->subtotal;
        $brng->total=$request->total;
        $brng->save();
        return redirect()->route('barang_masuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Incoming_Item  $incoming_Item
     * @return \Illuminate\Http\Response
     */
    public function show(Incoming_Item $incoming_Item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incoming_Item  $incoming_Item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distributor = Distributor::all();
        $brng_msk = Incoming_Item::FindOrFail($id);
        return view('admin.barang_masuk.edit', compact('brng_msk', 'distributor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incoming_Item  $incoming_Item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brng = Incoming_Item::FindOrFail($id);
        $brng->item_id=$request->item_id;
        $brng->distributor_id=$request->distributor_id;
        $brng->tanggal=$request->tanggal;
        $brng->jumlah=$request->jumlah;
        $brng->harga=$request->harga;
        $brng->subtotal=$request->subtotal;
        $brng->total=$request->total;
        $brng->save();
        return redirect()->route('barang_masuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incoming_Item  $incoming_Item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $msk = Incoming_Item::FindOrFail($id);
        $msk->delete();

        return redirect()->route('barang_masuk.index');
    }
}
