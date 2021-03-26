@extends('layoutAdmin/layout')

      @section('title', 'Tambah Barang Masuk')

      @section('container')
      <section id="main-content" style="font-size:16px;">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Tambah Data </h3>
                                <form action="{{route('barang_masuk.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                            <div class="col-sm-6 mt-3">
                                <label for="">Item's Name</label>
                                <input type="text" class="form-control" name="item" placeholder="Item's Name">
                            </div>
                            <div class="col-sm-5 mt-3" id="only-number">
                                <label for="">Quantity</label>
                                <input type="number" class="form-control" name="jumlah" placeholder="Quantity"  id="number">
                            </div>
                            <div class="col-sm-6 mt-3"  id="only-number">
                                <label for="">Price</label>
                                <input type="number"  id="number" class="form-control" name="harga" placeholder="Price">
                            </div>
                            <div class="col-sm-5 mt-3"  id="only-number">
                                <label for="">Subtotal</label>
                                <input type="number"  id="number" class="form-control" name="subtotal" placeholder="Subtotal">
                            </div>
                            <div class="col-sm-6 mt-3" id="only-number">
                                <label for="">Go-pay Number</label>
                                <input type="text" id="number" class="form-control" placeholder="Go-pay Number" name="gopay" required maxlength="13" minlength="12">
                            </div>
                            <div class="col-sm-5 mt-3" id="only-number">
                                <label for="">Distributor</label>
                                <select class="form-control" name="distributor_id" id="">
                                    @foreach ($distributor as $a)
                                        <option value="{{$a->distributor_id}}">{{$a->nama}}</option>
                                    @endforeach
                                </select>
                                <!-- <input type="text" id="number" class="form-control" placeholder="Distributor" name="distributor_id" required maxlength="13" minlength="12"> -->
                            </div>
                            <div class="col-sm-6 mt-3">
                                <label for="">Picture</label>
                                <input class="form-control" type="file" name="foto" id="formFile">
                                <small>*1 pictures</small>
                            </div>
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                            <div class="col-sm-5 mt-3 text-right"> 
                                <button class="btn btn-primary">Send</button>
                            </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->			
      </div><!-- /row -->
  
@endsection