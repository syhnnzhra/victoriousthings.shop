<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Item;
use App\Cart;

class DetailprodukController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id)
    {
        $data['sum'] = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->count('user_id');
        $data['item']=Item::findOrFail($id);
        return view('publik.item.detailproduk', $data);
    }
    
}
