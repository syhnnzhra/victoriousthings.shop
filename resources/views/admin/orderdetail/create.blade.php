@extends('layoutAdmin/layout')

      @section('title', 'Tambah Data order detail')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Form Tambah Data </h3>
                        <form method="post" action="{{route('Odetail.store')}}">
                          @csrf
                          <div class="form-group row mt-4 ml-4">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Order ID</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="exampleFormControlSelect1" required name="order_id">
                                    @foreach($order as $order)
                                    <option value="{{$order->id}}">{{$order->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                              <div class="form-group row mt-4 ml-4">
                                  <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                  <div class="col-sm-6">
                                  <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Harga . . .">
                                  </div>
                                  <div class="col-sm-4">
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                                  <div class="col-sm-6">
                                  <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan Jumlah . . .">
                                  </div>
                                  <div class="col-sm-4">
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <label for="pembayaran" class="col-sm-2 col-form-label">Pembayaran</label>
                                  <div class="col-sm-6">
                                  <input type="text" class="form-control" id="pembayaran" name="pembayaran" placeholder="Masukan Pembayaran . . .">
                                  </div>
                                  <div class="col-sm-4">
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <label for="pembayaran" class="col-sm-2 col-form-label">Order Address</label>
                                  <div class="col-sm-6">
                                  <input type="text" class="form-control" id="order_address" name="order_address" placeholder="Masukan Order Address . . .">
                                  </div>
                                  <div class="col-sm-4">
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                                  <div class="col-sm-6">
                                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukan No Email . . .">
                                  </div>
                                  <div class="col-sm-4">
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
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
                                  <div class="col-sm-4">
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <div class="col-sm-2 col-form-label">
                                  <button type="submit" class="btn btn-primary"> Update</button>
                                  </div>
                              </div>
                          </form>
                        </div>
                    </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->			
      </div><!-- /row -->
  
@endsection