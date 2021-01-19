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
        $categori = Category::all();
        $item = Item::latest()->get();
        return view ('publik.category.index',compact('categori','item'));
    }

    public function kategori(Category $id)
    {
        $categori = Category::all();
        $item = $id->Item()->get();
        return view ('publik.category.index',compact('categori','item'));
    }
    
    public function show($id)
    {
        $data['item']=Item::findOrFail($id);
        return view('publik.category.detailproduk', $data);
    }


}

