<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Item;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item ::all();
        return view ('barang', compact('items'));
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
        $item =new item;
        $item->nama_barang = $request->nama_barang;
        $item->kategori = $request->kategori;
        $item->stok = $request->stok;
        $item->harga = $request->harga;
        $item->keterangan = $request->keterangan;
        $item->foto = $request->foto;

        $item->save();

        return redirect('/barang');
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
        $update_barang = BarangModel::find($id);
        $update_barang->nama_barang = $request->updateNamaBarang;
        $update_barang->kategori = $request->updateKategori;
        $update_barang->stok = $request->updateStok;
        $update_barang->harga = $request->updateHarga;
        $update_barang->keterangan = $request->updateKeterangan;
        $update_barang->save();

        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        barang::destroy($id);
        return redirect('/barang');
    }
}
