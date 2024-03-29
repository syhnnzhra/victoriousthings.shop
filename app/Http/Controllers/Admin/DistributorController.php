<?php

namespace App\Http\Controllers\Admin;

use App\Distributor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributor = distributor::all();
        return view('admin.distributor.index', compact('distributor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.distributor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $distributor = new Distributor;
        $distributor->nama = $request->nama;
        $distributor->alamat = $request->alamat;
        $distributor->email = $request->email;
        $distributor->telephone = $request->telephone;
        $distributor->save();
        
        return redirect('/distributor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function show(Distributor $distributor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function edit($distributor_id)
    {
        $distributor = Distributor::FindOrFail($distributor_id);
        return view('admin.distributor.edit', compact('distributor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $distributor_id)
    {
        $distributor = Distributor::FindOrFail($distributor_id);
        $distributor->nama=$request->nama;
        $distributor->alamat=$request->alamat;
        $distributor->email=$request->email;
        $distributor->telephone=$request->telephone;
        $distributor->save();
        return redirect()->route('distributor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function destroy($distributor_id)
    {
        $distributor = Distributor::FindOrFail($distributor_id);
        $distributor->delete();

        return redirect()->route('distributor.index');
    }
    }

