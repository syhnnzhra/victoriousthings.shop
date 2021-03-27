<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Incoming_Item;
use Illuminate\Http\Request;
use App\Item;
use App\Distributor;
use File;

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
        $item= new Incoming_Item;
        $item->item=$request->item;
        $item->distributor_id=$request->distributor_id;
        $item->user_id = Auth::user()->id;
        $item->gopay=$request->gopay;
        $item->jumlah=$request->jumlah;
        $item->harga=$request->harga;
        $item->subtotal=$request->subtotal;
        $item->resi="0";
        $item->status="Pending";
        
        $foto =$request->foto;
        $imageName = time().'.'.
        $foto->extension();
        $request->foto->move(public_path().'/incom_item', $imageName);
        $item->foto = $imageName;
        $item->save();

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
    public function edit($incoming_id)
    {
        $distributor = Distributor::all();
        $brng_msk = Incoming_Item::FindOrFail($incoming_id);
        return view('admin.barang_masuk.edit', compact('brng_msk', 'distributor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incoming_Item  $incoming_Item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $incoming_id)
    {
        $brng = Incoming_Item::FindOrFail($incoming_id);
        $brng->item=$request->item;
        $brng->distributor_id=$request->distributor_id;
        $brng->user_id=$request->user_id;
        $brng->jumlah=$request->jumlah;
        $brng->harga=$request->harga;
        $brng->subtotal=$request->subtotal;
        $brng->resi=$request->resi;
        $brng->status=$request->status;
        $brng->save();
        return redirect('/barang_masuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incoming_Item  $incoming_Item
     * @return \Illuminate\Http\Response
     */
    public function destroy($incoming_id)
    {
        $msk = Incoming_Item::FindOrFail($incoming_id);
        $msk->delete();

        return redirect()->route('barang_masuk.index');
    }
}
