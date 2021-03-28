<?php

namespace App\Http\Controllers\Admin;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\User;
use PDF;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $item = Item::all();
        $report_order = Cart::where('status','Confirmed')->get();
        return view ('admin.laporan.index',compact('report_order','item'));
    }
    public function cetak()
    { 
        $item = Item::all();
        $report_order = Cart::where('status','Confirmed')->get();
        return view ('admin.laporan.print',compact('report_cetak'));
    }
    public function print(){
        $report_order = Cart::where('status','Confirmed')->get();
        $pdf = PDF::loadview('admin.laporan.print',compact('report_order'))->setPaper('A4','potrait');
        return $pdf->stream();
    }
}
