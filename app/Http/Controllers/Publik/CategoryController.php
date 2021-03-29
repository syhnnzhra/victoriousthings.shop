<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Item;
use App\Cart;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sum = Cart::where('user_id',Auth::user()->id)->where('order_id', '0')->count('user_id');
        $kat = Category::all();
        $item = Item::latest()->get();
        return view ('publik.category.index',compact('kat','item','sum'));
    }

    public function kategori($category_id)
    {
        $sum = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->count('user_id');
        $categori = Category::find($category_id);
        $item = Item::where('kategori_id', $category_id)->get();
        $kat = Category::all();
        return view ('publik.category.index',compact('categori','item', 'kat','sum'));
        // $item = $category_id->Item()->get();
        // return $item;
    }

    public function searchp(Request $request)
    {
        $sum = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->count('user_id');
        $searchp = $request->searchp;
        $item = Item::where('nama', 'like', '%'.$searchp.'%')->paginate(5);
            return view('publik.category.index', compact('item','sum'));
    }
    
    public function show($item_id)
    {
        $data['sum'] = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->count('user_id');
        $data['item']=Item::findOrFail($item_id);
        return view('publik.category.detailproduk', $data);
    }


}

