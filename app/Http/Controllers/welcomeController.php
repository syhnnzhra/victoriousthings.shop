<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class welcomeController extends Controller
{
    public function index()
    {
        $item = Item::orderBy('kategori_id')->limit(8)->get();
        return view('welcome', compact('item'));
    }
}
