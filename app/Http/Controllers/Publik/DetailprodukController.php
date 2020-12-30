<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;

class DetailprodukController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id)
    {
        $data['item']=Item::findOrFail($id);
        return view('publik.item.detailproduk', $data);
    }
}
