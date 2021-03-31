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
                                    <div class="table mt-3">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>E-Mail</th>
                                                    <th>Telephone</th>
                                                    <th>Jenis Kelamin</th>
                                                    <!-- <th>Aksi</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($user as $pelanggan)
                                                <tr>
                                                    <td>{{$pelanggan->id}}</td>
                                                    <td>{{$pelanggan->name}}</td>
                                                    <td>{{$pelanggan->email}}</td>
                                                    <td>{{$pelanggan->alamat}}</td>
                                                    <td>{{$pelanggan->jeniskelamin}}</td>
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