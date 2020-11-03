@extends('layoutAdmin/layout')

      @section('title', 'Customer')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h2> Tabel Customer </h2>
                                    <div class="new-data">
                                        <a href="{{url('/customer/create')}}" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
                                    </div>
                                    <div class="table mt-3">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>Telephone</th>
                                                    <th>Alamat</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($customer as $pelanggan)
                                                <tr>
                                                    <td>{{$pelanggan->id}}</td>
                                                    <td>{{$pelanggan->nama}}</td>
                                                    <td>{{$pelanggan->no_telp}}</td>
                                                    <td>{{$pelanggan->alamat}}</td>
                                                    <td>{{$pelanggan->jenis_kelamin}}</td>
                                                    <td>
                                                            <a href="{{route('customer.edit',$pelanggan->id)}}" class="btn btn-outline-warning"><i class="fa fa-edit"></i> Edit</a> 
                                                            <form action="{{route('customer.destroy',$pelanggan->id)}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i> Hapus</button>
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