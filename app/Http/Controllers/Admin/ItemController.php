<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Category;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['category']=Category::all();
        $data['item']=Item::all();
        return view('admin.item.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category']=Category::all();
        $data['item']=Item::all();
        return view('admin.item.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item= new Item;
        $item->nama=$request->nama;
        $item->kategori_id=$request->kategori_id;
        $item->stok=$request->stok;
        $item->harga=$request->harga;
        $item->keterangan=$request->keterangan;

        $foto =$request->foto;
        $imageName = time().'.'.
        $foto->extension();
        $request->foto->move(public_path().'/gambar', $imageName);
        $item->foto = $imageName;
        $item->save();

        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $item = Item::FindOrFail($id);
        return view('admin.item.edit', compact('item', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $foto =$request->foto;
        if($foto != NULL){
            $item=Item::FindOrFail($id);
            File::delete('gambar/'.$item->image);
            $imageName = time().'.'.$foto->extension();
            $request->foto->move(public_path('gambar'), $imageName);

            $item = Item::FindOrFail($id);
            $item->nama=$request->nama;
            $item->kategori_id=$request->kategori_id;
            $item->stok=$request->stok;
            $item->harga=$request->harga;
            $item->keterangan=$request->keterangan;
            $item->foto=$imageName;
            $item->save();
        }
        else{
            $item = Item::FindOrFail($id);
            $item->nama=$request->nama;
            $item->kategori_id=$request->kategori_id;
            $item->stok=$request->stok;
            $item->harga=$request->harga;
            $item->keterangan=$request->keterangan;
            $item->foto=$request->foto;
            $item->save();
            
        return redirect()->route('order.index');
    }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::FindOrFail($id);
        $item->delete();

        return redirect()->route('item.index');
    }
}
