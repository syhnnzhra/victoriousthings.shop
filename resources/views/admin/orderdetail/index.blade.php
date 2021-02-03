@extends('layoutAdmin/layout')

      @section('title', 'Order detail ')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h3 class="mt-4"> Tabel Order Detail </h3>
                                    <!-- <div class="new-data">
                                        <a href="/Odetail/create" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
                                    </div> -->
                                    <div class="table mt-5">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>ID Order</th>
                                                    <th>Nama</th>
                                                    <th>Telephone</th>
                                                    <th>Alamat</th>
                                                    <th>Kota</th>
                                                    <th>Provinsi</th>
                                                    <th>Kode Pos</th>
                                                    <th>Rincian Opsional</th>
                                                    <th>Payment</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orderdetail as $orderdetail)
                                                <tr>
                                                    <td>{{$orderdetail->id}}</td>
                                                    <td>{{$orderdetail->order_id}}</td>
                                                    <td>{{$orderdetail->nama}}</td>
                                                    <td>{{$orderdetail->telephone}}</td>
                                                    <td>{{$orderdetail->alamat}}</td>
                                                    <td>{{$orderdetail->kota}}</td>
                                                    <td>{{$orderdetail->provinsi}}</td>
                                                    <td>{{$orderdetail->kode_pos}}</td>
                                                    <td>{{$orderdetail->rincian_opsional}}</td>
                                                    <td>{{$orderdetail->bank}}</td>
                                                    <td>
                                                        <a href="{{route('Odetail.edit',$orderdetail->id)}}" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a> 
                                                        <form action="{{route('Odetail.destroy',$orderdetail->id)}}" method="post" class="d-inline">
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