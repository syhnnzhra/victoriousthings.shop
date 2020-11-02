@extends('layoutAdmin/layout')

      @section('title', 'Distributor ')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h3> Tabel Distributor </h3>
                                    <div class="new-data">
                                        <a href="/distributor/create" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
                                    </div>
                                    <div class="table mt-3">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Email</th>
                                                    <th>Telephone</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($distributor as $distributor)
                                                <tr>
                                                    <th>{{$distributor->id}}</th>
                                                    <th>{{$distributor->nama}}</th>
                                                    <th>{{$distributor->alamat}}</th>
                                                    <th>{{$distributor->email}}</th>
                                                    <th>{{$distributor->no_telp}}</th>
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