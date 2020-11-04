@extends('layoutAdmin/layout')

      @section('title', 'Edit Data Customer')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Form Edit Data </h3>
                                <form action="{{route('customer.update',$customer->id)}}" method="post">
                                @Method('PUT')
                                @csrf
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Customer</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required value="{{$customer->nama}}">
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Telephone</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="no_telp" placeholder="Nomer Telephone" required value="{{$customer->no_telp}}">
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" required value="{{$customer->alamat}}">
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" id="exampleFormControlSelect1" required name="jenis_kelamin" value="{{$customer->jenis_kelamin}}">
                                                <option value="Perempuan">Perempuan</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                            </select>
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