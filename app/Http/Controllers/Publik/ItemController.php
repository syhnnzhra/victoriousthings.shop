<?php

namespace App\Http\Controllers\Publik;
use App\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view ('publik.item.index',compact('items'));
    }

    // public function show($id)
    // {
    //     $data['item']=Item::findOrFail($id);
    //     return view('publik.item.pesan', $data);
    // }
   
    public function searchp(Request $request)
    {
        $searchp = $request->searchp;
        $items = Item::where('nama', 'like', '%'.$searchp.'%')->paginate(5);
            return view('publik.item.index', compact('items'));
    }
}
