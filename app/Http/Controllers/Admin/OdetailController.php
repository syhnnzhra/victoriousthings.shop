<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order_Detail;
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
    public function edit(Odetail $odetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Odetail  $odetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Odetail $odetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Odetail  $odetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Odetail $odetail)
    {
        //
    }
}
