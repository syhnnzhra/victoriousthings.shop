<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order;
use App\Cart;
use App\Item;


class BaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $odetail = Order::where('user_id', Auth::user()->id)->where('payment_status', 'COMFIRMED')->get();
        $sums = Order::where('user_id', Auth::user()->id)->where('payment_status', 'COMFIRMED')->count('user_id');
        $item = Item::all();
        $sum = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->count('user_id');
        $carts = Cart::where('status', 'Sudah Dibayar')->where('user_id',Auth::user()->id)->get();
        $user = User::where('id',Auth::user()->id)->first();
        return view('publik.profile.trans', compact('user','odetail','item','carts','sum','sums'));
    }
}
