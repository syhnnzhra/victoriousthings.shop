@extends('layoutAdmin/layout')

      @section('title', 'Tambah Barang Masuk')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Tambah Data </h3>
                                <form action="{{route('barang_masuk.store')}}" method="post">
                                @csrf
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Items ID</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="item_id" placeholder="Masukan Nama Barang" required>
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Distributor ID</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" id="exampleFormControlSelect1" required name="distributor_id">
                                                <option value="">Pilih Distributor</option>
                                                @foreach($distributor as $dist)
                                                <option value="{{$dist->distributor_id}}">{{$dist->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Jumlah</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Barang Masuk" required>
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="harga" placeholder="Harga Barang" required>
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Subtotal</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="subtotal" placeholder="Subtotal Barang" required>
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Total</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="total" placeholder="Total Harga Barang" required>
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="date form-control" name="tanggal" required>
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