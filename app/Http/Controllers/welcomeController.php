<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class welcomeController extends Controller
{
    public function index()
    {
        $item = Item::latest()->limit(4)->get();
        return view('welcome', compact('item'));
    }
    public function brng()
    {
        $item = Item::all();
        return view('welcome', compact('item'));
    }
}
