@extends('layoutAdmin/layout')

      @section('title', 'Order/pesanan ')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h2>Transaction</h2>
                                <div class="table table-borderless mt-3 col-sm-5">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <td>Order ID</td>
                                                <td>:</td>
                                                <td>{{$det->order_id}}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pelanggan</td>
                                                <td>:</td>
                                                <td>{{$det->first_name}}{{ $det->last_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>:</td>
                                                <td>{{$det->alamat}}, {{$det->kota}}, {{$det->provinsi}}, {{$det->kode_pos}}</td>
                                            </tr>
                                            <tr>
                                                <td>Status Pembayaran</td>
                                                <td>:</td>
                                                <td>{{$det->payment_status}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <td>#</td>
                                            <td>Produk</td>
                                            <td></td>
                                            <td>Qty</td>
                                            <td>Harga</td>
                                            <td>Total</td>
                                            <!-- <td>Action</td> -->
                                        </thead>
                                        <tbody>
                                            @foreach($carts as $o)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <img src="{{ asset('gambar/' . $o->item->foto) }}" width="100px" height="100px">
                                                    </td>
                                                    <td>{{$o->item->nama}}</td>
                                                    <td>{{$o->qty}}</td>
                                                    <td>Rp {{number_format($o->item->harga)}}</td>
                                                    <td>Rp {{number_format($o->qty * $o->item->harga)}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td>Ongkos Kirim</td>
                                                <td>Rp </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td>Subtotal</td>
                                                <td>Rp {{number_format($det->subtotal)}}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>		
          </div>


@endsection