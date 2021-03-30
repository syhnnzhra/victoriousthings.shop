@extends('publik/layout/layout')

    @section('title', 'Second Things - Cart')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books" style="font-family: 'Calisto-MT';">
           <div class="site-container">
		   <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size:35px ;color: #c18f59;'>Invoice</h2>
            <div>
                <div class="mt-5">
                    <div class="card">
                        <div class="card-body">
                            <!-- <h4 class="text-center" style="font-family:glimmeroflight-Regular-400;"> Invoice</h4> -->
                            <div class="row">
                                <div class="col-sm-8">
                                    <h3> Logo</h3>
                                </div>
                                <div class="col-sm-4">
                                    <h3> Transaction</h3>
                                    <div class="table table-responsive">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                               <td> Order ID </td>
                                               <td> : </td>
                                               <td>  </td>
                                            </tr>
                                                <tr>
                                                <td> Tanggal </td>
                                                <td> : </td>
                                                <td>  </td>
                                            </tr>
                                            <tr>
                                                <td> Status </td>
                                                <td> : </td>
                                                <td>  </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>

                            <div class="table table-borderless">
                                <table>
                                    <tr>
                                        <td> Nama </td>
                                        <td> :</td>
                                        <td> {{Auth::user()->name}}</td>
                                    </tr>
                                    <tr>
                                        <td> Alamat </td>
                                        <td> :</td>
                                        <td> {{Auth::user()->alamat}}, {{Auth::user()->city->title}}, {{Auth::user()->province->title}}, {{Auth::user()->kode_pos}}</td>
                                    </tr>
                                    <tr>
                                        <td> Kontak </td>
                                        <td> :</td>
                                        <td> 0987654321</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Produk</td>
                                            <td></td>
                                            <td>Qty</td>
                                            <td>Harga Satuan</td>
                                            <td>Total</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($carts as $c)
                                        <tr>
                                            <td><img src="{{ asset('gambar/' . $c->item->foto) }}" width="100px" height="100px"></td>
                                            <td>{{$c->item->nama}}</td>
                                            <td>{{$c->qty}}</td>
                                            <td>Rp 200,000</td>
                                            <td>Rp 400,000</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6">
                                        <div class="table table-borderless">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> Ongkos Kirim</td>
                                                    <td> Rp 20.000</td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> Diskon</td>
                                                    <td> Rp 0</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"> </td>
                                                    <td> Subtotal</td>
                                                    <td> Rp 0</td>
                                                </tr>
                                            </tbody>
                                        </table>    
                                    </div>
                                </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        </section>
	<!-- Container end -->

    @endsection