@extends('layoutAdmin/layout')

      @section('title', 'Barang Masuk')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h3> Tabel Barang Masuk</h3>
                                    <div class="new-data">
                                        <a href="" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
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
                                                    <th>Rp {{$brng->harga}}</th>
                                                    <th>Rp {{$brng->subtotal}}</th>
                                                    <th>Rp {{$brng->total}}</th>
                                                    <th>
                                                        <a href="{{route('barang_masuk.edit',$brng->id)}}" class="btn btn-outline-warning"><i class="fa fa-edit"></i> Edit</a> 
                                                            <form action="{{route('barang_masuk.destroy',$brng->id)}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i> Hapus</button>
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