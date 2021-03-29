<?php

namespace App\Http\Controllers\Admin;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Report_order;
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
        $report_order = Report_order::all();
        return view ('admin.laporan.index',compact('report_order'));
    }
    public function print(){
        $report_order = Report_order::all();
        $pdf = PDF::loadview('admin.laporan.print',compact('report_order'))->setPaper('A4','potrait');
        return $pdf->stream();
    }
}
