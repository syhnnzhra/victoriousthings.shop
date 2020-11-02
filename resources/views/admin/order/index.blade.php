@extends('layoutAdmin/layout')

      @section('title', 'Order/pesanan ')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h3> Tabel Order </h3>
                                    <div class="new-data">
                                        <a href="/order/create" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
                                    </div>
                                    <div class="table mt-3">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>ID Customer</th>
                                                    <th>Qty</th>
                                                    <th>Harga</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($order as $order)
                                                <tr>
                                                    <th>{{$order->id}}</th>
                                                    <th>{{$order->customer_id}}</th>
                                                    <th>{{$order->quantity}}</th>
                                                    <th>{{$order->harga}}</th>
                                                    <th><a href="#" class="btn btn-warning btn-sm"> Edit</a>
                                                    </th>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                    </div><!-- /content-panel -->
                 </div><!-- /col-lg-4 -->			
          </div><!-- /row -->


@endsection