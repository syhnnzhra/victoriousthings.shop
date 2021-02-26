@extends('layoutAdmin/layout')

      @section('title', 'Edit Data Kategori Barang')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Form Edit Data</h3>
                                <form action="{{route('kategori.update',$category->category_id)}}" method="post">
                                @Method('PUT')
                                @csrf
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Kategori</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required value="{{$category->nama}}">
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Deskripsi Kategori</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="deskripsi" required value="{{$category->deskripsi}}"></input>
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