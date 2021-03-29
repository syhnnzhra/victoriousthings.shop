<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Illuminate\Support\Facades\Http;
use App\Item;
use App\User;
use App\Cart;
use App\Order;
use App\City;
use App\Courier;
use App\Province;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $carts = Cart::where('user_id',Auth::user()->id)->where('status', 'Belum Dibayar')->get();
        $carts = Cart::where('user_id',Auth::user()->id)->where('order_id', '0')->get();
        $item = Item::first();
        $user = User::all();
        $city = City::all();
        $provinces = Province::all();
        $sum = Cart::where('user_id',Auth::user()->id)->where('order_id', '0')->count('user_id');
        $origin = 501;
        $destination = 114;
        $weight = 1700;
        $courier = "jne";
        $response = Http::asForm()->withHeaders([
            'key' => 'b102635f70187c8e0d6f02db01cc5c94'
        ])->post('https://api.rajaongkir.com/starter/cost',[
            'origin' => $origin,
            'destination' => $destination,
            'weight' => $weight,
            'courier' => $courier
        ]);
        return view('publik.cart.checkout', compact('carts','item','provinces','user','city','response','sum'));
        // $couriers = Courier::pluck('title', 'code');
        // $provinces = Province::pluck('title', 'province_id');
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
    public function store(Request $request){
        //
    }
    // public function store(Request $request)
    // {
    //     $odet = Order::create([
    //         'user_id' => $request->user_id,
    //         'nama' => $request->nama,
    //         'telephone' => $request->telephone,
    //         'alamat' => $request->alamat,
    //         'kota' => $request->kota,
    //         'provinsi' => $request->provinsi,
    //         'kode_pos' => $request->kode_pos,
    //         'rincian_opsional' => $request->rincian_opsional,
    //         'bank' => $request->bank,
    //         'subtotal' => $request->subtotal
    //         ]);
    //     $cart = Cart::where('user_id', Auth::user()->user_id)->where('order_id', 0)->where('status', 'Belum Dibayar')->get();
    //     if ($cart) {
    //         $cart->update([
    //             'order_id' => $odet->order_id,
    //             'status' => $request->status
    //         ]);
    //     }
    //     return $cart;
    //     return redirect(route('ckbrng.show', ['id' => $odet->order_id]));
    // }

    public function trans(){
        return redirect('transaction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'hi';
        // $carts = Cart::where('user_id',Auth::user()->id)->get();
        // $item = Item::first();
        // $kota = City::all();
        // $user = User::all();
        // $pro = Province::all();
        // return view('publik.cart.checkout', compact('carts','item','kota','pro','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return 'edit';
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
        $cart = Cart::where('order_id', '0')->where('user_id', Auth::user()->id)->get();
        if ($cart) {
            // buat variabel inputan order
                $order = Order::create([
                    'user_id' => $request->user_id,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'telephone' => $request->telephone,
                    'alamat' => $request->alamat,
                    'kota' => $request->destination,
                    'provinsi' => $request->province,
                    'kode_pos' => $request->kode_pos,
                    'rincian_opsional' => $request->rincian_opsional,
                    'bank' => $request->bank,
                    'postal_fee' => $request->postal_fee,
                    'payment_status'=>"UNPAID",
                    'subtotal' => $request->subtotal
                    ]);
                    $this->_generatePaymentToken($order);
                    // update status cart
                    foreach($cart as $c){
                        $c->order_id=$order->order_id;
                        // $c->status="Pending";
                        $c->save();
                    }
                    return redirect('received/'. $order->order_id);
                    // return redirect()->route('transaksi.edit')->with('success', 'Order berhasil disimpan');
            } else {
                return abort('404');//kalo ternyata ga ada shopping cart, maka akan menampilkan error halaman tidak ditemukan
        }
    }

    private function _generatePaymentToken($order){
        $this->iniPaymentGateway();
        
        $user = [
            'first_name' => $order->first_name,
            'last_name' => $order->last_name,
            'email' => Auth::user()->email,
            'phone' => $order->telephone,
        ];
        $params = [
            'enable_payments' => \App\Payment::PAYMENT_CHANNELS,
            'transaction_details' => [
                'order_id' => $order->order_id,
                'gross_amount' => $order->subtotal,
            ],
            'customer_details' => $user,
            'expairy' => [
                'start_time' => date('Y-m-d H:i:s T'),
                'unit' => \App\Payment::EXPIRY_UNIT,
                'duration' =>\App\Payment::EXPIRY_DURATION,
            ],
        ];
        $snap = \Midtrans\Snap::createTransaction($params);
        // dd($snap);exit;
        if ($snap->token){
            $order->payment_token = $snap->token;
            $order->payment_url = $snap->redirect_url;
            $order->save();
        }
    }
    
    public function received($order_id){
        $det = Order::where('user_id',Auth::user()->id)->get();
        $sum = Cart::where('user_id',Auth::user()->id)->where('order_id', '0')->count('user_id');
        $order = Order::findOrFail($order_id);
        $item = Item::all();
        $carts = Cart::where('user_id',Auth::user()->id)->where('order_id', $order_id)->get();
        return view('publik.cart.received', compact('item', 'order', 'carts','sum'));
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

    public function generateInvoice($id)
    {
        $cart = Cart::findOrFail($id);
        $pdf = PDF::loadView('publik.cart.print', compact('cart'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    protected function iniPaymentGateway(){
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-yyJ_8KsPr_LTmhV3MjL8RHwa';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    }
}
