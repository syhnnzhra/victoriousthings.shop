<?php

namespace App\Http\Controllers\Publik;
use App\Item;
use App\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sum = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->count('user_id');
        $sum = Cart::where('user_id',Auth::user()->id)->where('order_id', '0')->count('user_id');
        $items = Item::all();
        return view ('publik.item.index',compact('items', 'sum'));
    }

    // public function show($id)
    // {
    //     $data['item']=Item::findOrFail($id);
    //     return view('publik.item.pesan', $data);
    // }
   
    public function searchp(Request $request)
    {
        // $sum = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->count('user_id');
        $sum = Cart::where('user_id',Auth::user()->id)->where('order_id', '0')->count('user_id');
        $searchp = $request->searchp;
        $items = Item::where('nama', 'like', '%'.$searchp.'%')->paginate(5);
            return view('publik.item.index', compact('items','sum'));
    }
}
