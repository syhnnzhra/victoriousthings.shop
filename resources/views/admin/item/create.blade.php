@extends('layoutAdmin/layout')

      @section('title', 'Tambah Data Barang')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Form Tambah Data </h3>
                                <form action="{{route('item_admin.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nama </label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama . . ." required>
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" id="exampleFormControlSelect1" required name="kategori_id">
                                                @foreach($category as $category)
                                                <option value="{{$category->category_id}}">{{$category->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Stok</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="stok" placeholder="Masukan Stok  . . ." required>
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="harga" placeholder="Masukan Harga  . . ." required>
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="keterangan" placeholder="Masukan Deskripsi  . . ." required>
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-6">
                                        <input type="file" id="foto" name="foto">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="button ml-5 mb-4">
                                        <button type="submit" class="btn btn-outline-success">Simpan</button>
                                    </div>
                                </form>
                        </div>
                    </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->			
      </div><!-- /row -->
  
@endsection