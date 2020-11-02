<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Incoming_Item;
use Illuminate\Http\Request;

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
    public function edit(Incoming_Item $incoming_Item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incoming_Item  $incoming_Item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incoming_Item $incoming_Item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incoming_Item  $incoming_Item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incoming_Item $incoming_Item)
    {
        //
    }
}
