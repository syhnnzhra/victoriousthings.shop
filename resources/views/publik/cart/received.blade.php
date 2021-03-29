@extends('publik/layout/layout')

    @section('title', 'Cart')


    @section('container')
    <!-- Container -->
        <section class="fh5co-books" style="font-family: 'Calisto-MT';">
            <div class="site-container">
		        <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size:35px ;color: #c18f59;'>Detail Transaction</h2>
                <div class="row">
						<div class="col-sm-8">
							<p class="text-dark mb-2" style="font-weight: normal; font-size:16px; text-transform: uppercase;">Billing Address</p>
							<address>
								{{$order->first_name}} {{$order->last_name}}
								<br> Email: {{Auth::user()->email}}
								<br> Phone: {{$order->telephone}}
								<br> Postcode: {{$order->kode_pos}}
							</address>
						</div>
						<div class="col-sm-4">
							<p class="text-dark mb-2" style="font-weight: normal; font-size:16px;">Details</p>
							<address>
								Invoice ID: 
								<span class="text-dark"># {{$order->order_id}}</span>
								<br> {{($order->updated_at) }}
								<br> Status: 
								<br> Payment Status: {{$order->payment_status}}
								<br> Shipped by: Calliroe Dev
							</address>
						</div>
					</div>
					<div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Produk</td>
                                    <td></td>
                                    <td>Qty</td>
                                    <td>Harga Satuan</td>
                                    <td>Total</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($carts as $c)
                                <tr>
                                    <td><img src="{{ asset('gambar/' . $c->item->foto) }}" width="100px" height="100px"></td>
                                    <td>{{$c->item->nama}}</td>
                                    <td>{{$c->qty}}</td>
                                    <td>Rp {{number_format($c->item->harga)}}</td>
                                    <td>Rp {{number_format($c->item->harga*$c->qty)}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3"></td>
                                    <td>Subtotal</td>
                                    <?php
                                    $subtotal = 0;
                                        foreach($carts as $key=>$value)
                                        {
                                            $hasil = $value->qty * $value->item->harga;
                                            $subtotal+= $hasil;
                                        }
                                    ?>
                                    <td>Rp {{number_format($subtotal)}}</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td>Ongkos Kirim</td>
                                    <td>Rp {{number_format($order->postal_fee)}}</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td>Grand Total</td>
                                    <td>Rp {{number_format($order->subtotal)}}</td>
                                </tr>
                            </tfoot>
                        </table>
            </div>
                    <div class="row">
                        <div class="col-sm-9"></div>
                        <div class="col-sm-3 text-right"> 
                            @if (!$order->isPaid())
                                <a class="brand-button" href="{{$order->payment_url}}">Proceed to Payment</a>
                            @endif 
                        </div>
                    </div>
        </section>
	<!-- Container end -->
    @endsection