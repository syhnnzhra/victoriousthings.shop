@extends('publik/layout/layoutwo')

    @section('Second Things - Cart')

    @section('container')
    <!-- Container -->
        <section class="fh5co-books" style="font-family: 'Calisto-MT';">
            <div class="site-container">
		        <div class="textatas">Order Confirmation</div>
                <div class="layoutbg">
                <div class="textkiri">
                    <p class="textmedium">Billing Address</p>
							<address>
								{{$order->first_name}} {{$order->last_name}}
								<br> Email: {{Auth::user()->email}}
								<br> Phone: {{$order->telephone}}
								<br> Postcode: {{$order->kode_pos}}
							</address>
                </div>
                <div class="textkanan">
                    <p class="textmedium">Details</p>
							<address>
								Invoice ID: 
								<span ># {{$order->order_id}}</span>
								<br> {{($order->updated_at) }}
								<br> Payment Status: {{$order->payment_status}}
								<br> Shipped by: Calliroe Dev
							</address>
                </div>
                <div class="garisdot"></div>
					<div class="table-responsive">
                        <table class="table" style="color: #99754e;">
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
                            <div class="books-brand-button">
                                <a href="{{$order->payment_url}}" class="brand-button" style="width: 200px">Proceed to Payment</a>
                              </div>
                            @endif 
                        </div>
                    </div>
                </div>
        </section>
	<!-- Container end -->
    @endsection