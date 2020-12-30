@extends('layoutAdmin/layout')

      @section('title', 'Edit Data Order Detail')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Form Edit Data </h3>
                                <form action="{{route('Odetail.update',$orderdetail->id)}}" method="post">
                                @Method('PUT')
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
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Harga</label>
                                         <div class="col-sm-6">
                                            <input type="text" class="form-control" name="harga" placeholder="Masukan Harga Barang . . ." required value="{{$orderdetail->harga}}">
                                            </div>
                                            <div class="col-sm-4">
                                            </div>
                                        </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Jumlah</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="jumlah" placeholder="Masukan Jumlah. . ." required value="{{$orderdetail->jumlah}}">
                                        </div>
                                            <div class="col-sm-4">                
                                        </div>
                                   </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Pembayaran</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="pembayaran" placeholder="Masukan Pembayaran . . ." required value="{{$orderdetail->pembayaran}}">
                                        </div>
                                            <div class="col-sm-4">                
                                        </div>
                                   </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Order Address</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="order_address" placeholder="Masukan Order Address . . ." required value="{{$orderdetail->order_address}}">
                                        </div>
                                            <div class="col-sm-4">                
                                        </div>
                                   </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="email" placeholder="Masukan Email . . ." required value="{{$orderdetail->email}}">
                                        </div>
                                            <div class="col-sm-4">                
                                        </div>
                                   </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="date form-control" name="tanggal" required value="{{$orderdetail->tanggal}}">
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