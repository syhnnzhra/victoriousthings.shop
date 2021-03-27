@extends('layoutAdmin/layout')

      @section('title', 'Second Things - Incoming Item')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Form Edit Data </h3>
                                <form action="{{route('barang_masuk.update',$brng_msk->incoming_id)}}" method="post">
                                @Method('PUT')
                                @csrf
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Items ID</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="item_id" placeholder="Masukan Nama Barang" required value="{{$brng_msk->item_id}}">
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Distributor ID</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" id="exampleFormControlSelect1" required name="distributor_id">
                                                <option value="{{$brng_msk->distributor_id}}">{{$brng_msk->distributor->nama}}</option>
                                                @foreach($distributor as $ds)
                                                <option value="{{$ds->nama}}">{{$ds->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Jumlah</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Barang Masuk" required value="{{$brng_msk->jumlah}}">
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="harga" placeholder="Harga Barang" required value="{{$brng_msk->harga}}">
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Subtotal</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="subtotal" placeholder="Subtotal Barang" required value="{{$brng_msk->subtotal}}">
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Total</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="total" placeholder="Total Harga Barang" required value="{{$brng_msk->total}}">
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="date form-control" name="tanggal" required value="{{$brng_msk->tanggal}}">
                                        </div>
                                        <div class="col-sm-4">
                                            <script type="text/javascript">
                                                $('.date').datepicker({  
                                                format: 'yyyy-mm-dd'
                                                });  
                                            </script> 
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