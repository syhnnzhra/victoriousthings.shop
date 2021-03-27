@extends('layoutAdmin/layout')

      @section('title', 'Second Things - Distributor')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Form Edit Data </h3>
                                <form action="{{route('distributor.update',$distributor->distributor_id)}}" method="post">
                                @Method('PUT')
                                @csrf
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Company Name </label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama . . ." required value="{{$distributor->nama}}">
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-6">
                                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap . . ." required value="{{$distributor->alamat}}">
                                            </div>
                                            <div class="col-sm-4">
                                                
                                            </div>
                                        </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="email" placeholder="Nomer Email . . ." required value="{{$distributor->email}}">
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Telephone</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="telephone" placeholder="Telephone . . ." required value="{{$distributor->telephone}}">
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