@extends('layoutAdmin/layout')

      @section('title', 'Barang Masuk')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h2> Tabel Barang Masuk</h2>
                                    <div class="new-data">
                                        <a href="/barang_masuk/create" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
                                    </div>
                                    <div class="table mt-3">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Item</th>
                                                    <th>Distributor</th>
                                                    <th>Tanggal</th>
                                                    <th>Jumlah</th>
                                                    <th>Harga</th>
                                                    <th>Subtotal</th>
                                                    <th>Total</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($barang_masuk as $brng)
                                                <tr>
                                                    <th>{{$brng->id}}</th>
                                                    <th>{{$brng->item_id}}</th>
                                                    <th>{{$brng->distributor_id}}</th>
                                                    <th>{{$brng->tanggal}}</th>
                                                    <th>{{$brng->jumlah}}</th>
                                                    <th>Rp {{number_format($brng->harga)}}</th>
                                                    <th>Rp {{number_format($brng->subtotal)}}</th>
                                                    <th>Rp {{number_format($brng->total)}}</th>
                                                    <th>
                                                        <a href="{{route('barang_masuk.edit',$brng->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i> </a> 
                                                            
                                                            <form action="{{route('barang_masuk.destroy',$brng->id)}}" method="post" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger">
                                                                <i class="fa fa-trash-o"></i>
                                                                </button>
                                                            </form>
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