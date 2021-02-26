<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Item;

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
        $kat = Category::all();
        $item = Item::latest()->get();
        return view ('publik.category.index',compact('kat','item'));
    }

    public function kategori($category_id)
    {
        $categori = Category::find($category_id);
        $item = Item::where('kategori_id', $category_id)->get();
        $kat = Category::all();
        return view ('publik.category.index',compact('categori','item', 'kat'));
        // $item = $category_id->Item()->get();
        // return $item;
    }
    
    public function show($item_id)
    {
        $data['item']=Item::findOrFail($item_id);
        return view('publik.category.detailproduk', $data);
    }


}

