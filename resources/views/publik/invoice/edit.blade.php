@extends('publik/layout/layout')

    @section('title', 'Transaction')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books" style="font-family: 'Calisto-MT';">
           <div class="site-container">
		        <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size:35px ;color: #c18f59;'>Transaction</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                                <div class="col-sm-4">
                                    <h3> Logo</h3>
                                </div>
                            </div>

                            <div class="table table-borderless mt-3 col-sm-5">
                                <table class="">
                                    <tr>
                                        <td> Nama </td>
                                        <td> :</td>
                                        <td> {{$det->first_name}} {{$det->last_name}}</td>
                                    </tr>
                                    <tr>
                                        <td> Alamat </td>
                                        <td> :</td>
                                        <td> {{$det->alamat}}, {{$det->city->title}}, {{$det->province->title}}, {{$det->kode_pos}} </td>
                                        <!-- <td> {{Auth::user()->alamat}}, {{Auth::user()->city->nama}}, {{Auth::user()->province->nama}}, {{Auth::user()->kode_pos}}</td> -->
                                    </tr>
                                    <tr>
                                        <td> Kontak </td>
                                        <td> :</td>
                                        <td> {{$det->telephone}}</td>
                                    </tr>
                                    <tr>
                                        <td> Payment </td>
                                        <td> :</td>
                                        <td> {{$det->bank}}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <td>#</td>
                                            <td>Produk</td>
                                            <td></td>
                                            <td>Qty</td>
                                            <td>Harga</td>
                                            <td>Total</td>
                                            <!-- <td>Action</td> -->
                                        </thead>
                                        <tbody>
                                            @foreach($carts as $o)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <img src="{{ asset('gambar/' . $o->item->foto) }}" width="100px" height="100px">
                                                    </td>
                                                    <td>{{$o->item->nama}}</td>
                                                    <td>{{$o->qty}}</td>
                                                    <td>Rp {{number_format($o->item->harga)}}</td>
                                                    <td>Rp {{number_format($o->qty * $o->item->harga)}}</td>
                                                    <!-- <td>
                                                        <form action="" method="post">
                                                            @csrf
                                                                <input type="hidden" name="_method" value="DELETE" class="form-control">
                                                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                                        </form>
                                                    </td> -->
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <!-- <tr>
                                                <td></td>
                                                <td>                                                  <input type="hidden" name="_method" value="PUT" class="form-control">
                                                        <select name="product_id" class="form-control">
                                                            <option value="">Pilih Produk</option>
                                                            <option value=""></option>
                                                        </select>
                                                </td>
                                                <td>                                                  <input type="number" min="1" value="1" name="qty" class="form-control" required>
                                                </td>
                                                <td colspan="3">
                                                    <button class="btn btn-primary btn-sm">Tambahkan</button>
                                                </td>
                                            </tr> -->
                                            <!-- <tr>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> Ongkos Kirim</td>
                                                <td> Rp 20.000</td>
                                            </tr> -->
                                            <!-- <tr>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> Diskon</td>
                                                <td> Rp 0</td>
                                            </tr> -->
                                            <tr>
                                                <td colspan="4"> </td>
                                                <td> Ongkos Kirim</td>
                                                <td> Rp 11,000 </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"> </td>
                                                <td> Subtotal</td>
                                                <td> Rp {{number_format($det->subtotal)}}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                
                                    </div>
                                </div>
                                
                                    </div>
                                    </div>
                    </div>
           </div>
        </section>
    @endsection