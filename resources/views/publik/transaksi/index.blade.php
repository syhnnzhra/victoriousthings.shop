@extends('publik/layout/apps')

      @section('title', 'My Transaction')


      @section('container')
      <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Transaksi</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <!-- <p>Maecenas pellentesque ante faucibus lectus vulputate sollicitudin. Cras feugiat hendrerit semper.</p> -->
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-9">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form action="{{route('transaksi.store')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="inputAddress">Order ID</label>
                                <select class="form-control" id="exampleFormControlSelect1" required name="order_id">
                                    @foreach($order as $order)
                                    <option value="{{$order->id}}">{{$order->item_id}} - {{$order->item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Pembayaran</label>
                                <input type="text" class="form-control" name="pembayaran">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Harga</label>
                                <input type="text" class="form-control" name="harga" placeholder="Contoh: 2000">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputCity">Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" placeholder="Contoh: 2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Alamat Pengantaran</label>
                                <input type="text" class="form-control" name="order_address" placeholder="Contoh: Jalan ABCD no 123 rt 1 rw 2 kode pos 12345">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="user@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Tanggal</label>
                                <input type="text" class="date form-control" name="tanggal">
                                        <div class="col-sm-4">
                                            <script type="text/javascript">
                                                $('.date').datepicker({  
                                                format: 'yyyy-mm-dd'
                                                });  
                                            </script> 
                                        </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="belum diterima">Barang Belum Diterima</option>
                                        <option value="diterima">Barang Sudah Diterima</option>
                                    </select>
                            </div>
                                <fieldset>
                                    <button type="submit" id="form-submit"  class="main-button">Kirim</button>
                                </fieldset>
                            </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->

                    </div>
                </div>
                
            </div>
        </div>
    </section>
      @endsection