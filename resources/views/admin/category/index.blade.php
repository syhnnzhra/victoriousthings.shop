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
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($category as $kat)
                                            <tr>
                                                <th>{{$kat->id}}</th>
                                                <th>{{$kat->nama}}</th>
                                                <th>{{$kat->deskripsi}}</th>
                                                <td>
                                                    <a href="{{route('kategori.edit',$kat->id)}}" class="btn btn-outline-warning"><i class="fa fa-edit"></i> </a> 
                                                            <form action="{{route('kategori.destroy',$kat->id)}}" method="post" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-outline-danger">
                                                                <i class="fa fa-trash-o"></i>
                                                                </button>
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