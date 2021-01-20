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
                                                    <th>Customer</th>
                                                    <th>Barang</th>
                                                    <th>Qty</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($order as $order)
                                                <tr>
                                                    <td>{{$order->id}}</td>
                                                    <td>{{$order->customer_id}}</td>
                                                    <td>{{$order->item_id}} - {{$order->item->nama}}</td>
                                                    <td>{{$order->quantity}}</td>
                                                    <td>{{$order->status}}</td>
                                                    <td>
                                                        <a href="{{route('order.edit',$order->id)}}" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a> 
                                                        <form action="{{route('order.destroy',$order->id)}}" method="post" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-o"></i></button>
                                                        </form>
                                                    </td>
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