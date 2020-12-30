<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id)
    {
        $data['item']=Item::findOrFail($id);
        return view('publik.item.pesan', $data);
    }
    
}
