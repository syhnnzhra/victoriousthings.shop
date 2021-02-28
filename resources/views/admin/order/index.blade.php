@extends('layoutAdmin/layout')

      @section('title', 'Order/pesanan ')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h3 class="mt-4"> Tabel Order </h3>
                                    <!-- <div class="new-data">
                                        <a href="/order/create" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
                                    </div> -->
                                    <div class="table mt-5">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>User</th>
                                                    <th>Item</th>
                                                    <th>SubTotal</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($order as $order)
                                                <tr>
                                                    <td>{{$order->order_id}}</td>
                                                    <td>{{$order->user->name}}</td>
                                                    <td> <span class="badge badge-success">{{ $sum }} Item</span> </td>
                                                    <td>Rp {{number_format($order->subtotal)}}</td>
                                                    <td>
                                                        <a href="{{route('order.show',$order->order_id)}}" class="btn btn-outline-warning">Show</a> 
                                                        <!-- <a href="{{route('order.edit',$order->order_id)}}" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a> 
                                                        <form action="{{route('order.destroy',$order->order_id)}}" method="post" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-o"></i></button>
                                                        </form> -->
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