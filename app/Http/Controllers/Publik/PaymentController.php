<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Payment;

class PaymentController extends Controller
{
    public function notification(Request $request){
        dd($request);
    }
    public function completed(Request $request){
        //
    }
    public function failed(Request $request){
        //
    }
    public function unfinish(Request $request){
        //
    }
}
