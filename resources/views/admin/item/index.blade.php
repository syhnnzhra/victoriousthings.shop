@extends('layoutAdmin/layout')

      @section('title', 'barang ')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h3> Tabel Barang </h3>
                                    <div class="new-data">
                                        <a href="{{url('/item/create')}}" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
                                    </div>
                                    <div class="table mt-3">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Stok</th>
                                                    <th>Harga</th>
                                                    <th>Deskripsi</th>
                                                    <th>Foto</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($item as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->nama}}</td>
                                                    <td>{{$item->category->nama}}</td>
                                                    <td>{{$item->stok}}</td>
                                                    <td>{{$item->harga}}</td>
                                                    <td>{{$item->keterangan}}</td>
                                                     <td height="30%" width="20%"><img src="{{ asset('gambar/'.$item->foto) }}" height="40%" width="40%" alt="" srcset=""></td> 
                                                    <td>
                                                            <a href="{{route('item.edit',$item->id)}}" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a> 
                                                            <form action="{{route('item.destroy',$item->id)}}" method="post" class="d-inline">
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