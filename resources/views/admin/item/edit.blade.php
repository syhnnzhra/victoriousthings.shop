@extends('layoutAdmin/layout')

      @section('title', 'Edit Data')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Form Edit Data </h3>
                                <form action="{{route('item_admin.update',$item->item_id)}}" method="post" enctype="multipart/form-data">
                                @Method('PUT')
                                @csrf
                                <div class="form-group row mt-4 ml-4">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nama"  placeholder="Masukan Nama . . ." required value="{{$item->nama}}">
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Kategori </label>
                                        <div class="col-sm-6">
                                            <select class="form-control" id="exampleFormControlSelect1" required name="kategori_id">
                                                @foreach($category as $category)
                                                <option value="{{$category->category_id}}">{{$category->id}} - {{$category->nama}}</option>
                                                @endforeach
                                            </select></div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="stok"  placeholder="Masukan Stok . . ." required value="{{$item->stok}}">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="harga"  placeholder="Masukan Harga . . ." required value="{{$item->harga}}">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="keterangan" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="keterangan"  placeholder="Masukan Deskripsi . . ." required value="{{$item->keterangan}}">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-6">
                                        <input type="file" id="foto" name="foto" value="{{$item->foto}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="{{ asset('gambar/'. $item->foto )}}" height="70%" width="30%" alt="" srcset="" >
                                            </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="button ml-5 mb-4">
                                        <button type="submit" class="btn btn-outline-success">Update</button>
                                    </div>
                                </form>
                        </div>
                    </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->			
      </div><!-- /row -->
  
@endsection