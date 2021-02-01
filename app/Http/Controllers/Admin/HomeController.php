<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;

class HomeController extends Controller
{
    //
    public function index(){
        $item = Item::latest()->limit(5)->get();
        return view('admin.homeAdmin', compact('item'));
    }
}
