@extends('layoutAdmin/layout')

      @section('title', 'Order detail ')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h3> Tabel Order Detail </h3>
                                    <div class="new-data">
                                        <a href="/orderdetail/create" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
                                    </div>
                                    <div class="table mt-3">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>ID Order</th>
                                                    <th>ID Item</th>
                                                    <th>Jumlah</th>
                                                    <th>Pembayaran/Payment</th>
                                                    <th>Order Address</th>
                                                    <th>Email</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orderdetail as $orderdetail)
                                                <tr>
                                                    <th>{{$orderdetail->id}}</th>
                                                    <th>{{$orderdetail->order_id}}</th>
                                                    <th>{{$orderdetail->item_id}}</th>
                                                    <th>{{$orderdetail->jumlah}}</th>
                                                    <th>{{$orderdetail->pembayaran}}</th>
                                                    <th>{{$orderdetail->order_address}}</th>
                                                    <th>{{$orderdetail->email}}</th>
                                                    <th>{{$orderdetail->tanggal}}</th>
                                                    <th>{{$orderdetail->status}}</th>
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