@extends('layoutAdmin/layout')

      @section('title', 'barang ')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt">
              <div class="col-lg-12">
                        <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> Tabel Barang
                        <button type="button" class="btn btn-theme03 " data-toggle="modal" data-target="#myModal">Tambah</button>
                        </h4>
                            <section id="unseen">
                              <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                  <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                  </tr>
                                </thead>
                              </tbody>
                              @foreach($items as $item)
                                  <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->foto }}</td>
                                    <td>
                                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalUpdateBarang {{ $item->id }}"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalHapusBarang {{ $item->id }}" ><i class="fa fa-trash-o"></i></button>
                                    </td>
                                  </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </section>
                    </div><!-- /content-panel -->
                 </div><!-- /col-lg-4 -->			
          </div><!-- /row -->

          <!-- Modal Tambah Data -->
          <div id="myModal" class="modal fade" role="dialog">
             <div class="modal-dialog">
          <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Silahkan Isi</h4>
            </div>
            <div class="modal-body">
                <form action="{{ action('barangController@store') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama </label>
                      <input type="text" class="form-control" id="nama" value="{{ old('nama_barang') }}" placeholder="Masukan Nama..." name="nama_barang">
                    </div>
                    <div class="form-group">
                      <label for="kategori">Kategori</label>
                      <input type="text" class="form-control" id="kategori" value="{{ old('kategori') }}" placeholder="Massukan Kategori..." name="kategori">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" id="stok" value="{{ old('stok') }}" placeholder="Masukan Stok..." name="stok">
                      </div>
                      <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="text" class="form-control" id="harga" value="{{ old('harga') }}" placeholder="Masukan Harga..." name="harga">
                      </div>
                      <div class="form-group">
                        <label for="keterangan">keterangan</label>
                        <input type="text" class="form-control" id="keterangan" value="{{ old('keterangan') }}" placeholder="Masukan Keterangan..." name="keterangan">
                      </div> 
                      <div class="form-group">
                        <label for="keterangan">Foto</label>
                        <input type="text" class="form-control" id="keterangan" value="{{ old('keterangan') }}" placeholder="Masukan Keterangan..." name="keterangan">
                      </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
            </div>
        </form>
        </div>
        </div>


@endsection