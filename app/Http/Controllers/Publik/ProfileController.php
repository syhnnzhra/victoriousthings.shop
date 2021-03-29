<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order;
use App\Cart;
use App\City;
use App\Item;
use App\Province;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $odetail = Order::where('user_id', Auth::user()->id)->get();
        $sums = Order::where('user_id', Auth::user()->id)->count('user_id');
        // return $odetail;
        $item = Item::all();
        // $sum = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Bayar')->count('user_id');
        $sum = Cart::where('user_id',Auth::user()->id)->where('order_id', '0')->count('user_id');
        $carts = Cart::where('status', 'Conplited')->where('user_id',Auth::user()->id)->get();
        $user = User::where('id',Auth::user()->id)->first();
        return view('publik.profile.index', compact('user','odetail','item','carts','sum','sums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $prov = Province::all();
        $city = City::all();
        $data = User::find(Auth::user()->id);
        $sum = Cart::where('user_id',Auth::user()->id)->where('order_id', '0')->count('user_id');
        return view('publik.profile.edit', compact('sum','city','prov','data'));
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
        
        $user = User::FindOrFail($id);
        $user->name=$request->name;
        $user->jeniskelamin=$request->jeniskelamin;
        $user->tanggal_lahir=$request->tanggal_lahir;
        $user->alamat=$request->alamat;
        $user->province_id=$request->province_id;
        $user->city_id=$request->city_id;
        $user->save();
        return redirect()->route('prof.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
