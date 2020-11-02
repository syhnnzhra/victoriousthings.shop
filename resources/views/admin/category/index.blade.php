@extends('layoutAdmin/layout')

      @section('title', 'Kategori Barang')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h2> Tabel Kategori Barang </h2>
                                    <div class="new-data">
                                        <a href="/kategori/create" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
                                    </div>
                                    <div class="table mt-3">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Kategori</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($category as $kat)
                                            <tr>
                                                <th>{{$kat->id}}</th>
                                                <td>{{$kat->nama}}</td>
                                                <td>{{$kat->deskripsi}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-warning"> Edit</a>
                                                    <a href="#" class="btn btn-outline-danger"> Hapus</a>
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