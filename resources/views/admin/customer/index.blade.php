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
                                        <a href="" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
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
                                                    <th>{{$pelanggan->id}}</th>
                                                    <th>{{$pelanggan->nama}}</th>
                                                    <th>{{$pelanggan->no_telp}}</th>
                                                    <th>{{$pelanggan->alamat}}</th>
                                                    <th>{{$pelanggan->jenis_kelamin}}</th>
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