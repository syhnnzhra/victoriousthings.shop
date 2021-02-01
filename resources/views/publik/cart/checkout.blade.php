@extends('publik/layout/layout')

    @section('title', 'Cart')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books" style="font-family: 'Calisto-MT';">
           <div class="site-container">
               <h2 class="universal-h2 universal-h2-bckg mt-5" style='color: #c18f59;'>Check Out</h2>
                <nav style="--bs-breadcrumb-divider: '>';" class="col-6 responsive" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/cartp">Cart</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Check Out</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                    </ol>
                </nav>
                <h6></h6>
               <div class="row">

                    <!-- review cart -->
                    <div class="col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                    <table class="table table-borderless table-responsive" style='color: #c18f59;'>
                                        <thead>
                                            <tr>
                                                <td> <b> Produk </b></td>
                                                <td> </td>
                                                <td> </td>
                                                <td> <b> Harga </b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                @foreach($carts as $p)
                                            <tr>
                                                <td> <img src="{{ asset('gambar/' . $p->item->foto) }}" width="100px" height="100px" alt="{{$p->item->nama}}"></td>
                                                <td class="text-left"> {{$p->item->nama}}</td>
                                                <td class="text-left"> XL, {{$p->qty}}</td>
                                                <td class="text-right">Rp {{ number_format($p->item->harga * $p->qty) }}</td>
                                            </tr>
                                @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td></td>
                                                <td>Subtotal</td>
                                                <td></td>
                                                <td>Rp</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Ongkos Kirim</td>
                                                <td></td>
                                                <td>Rp</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Total</td>
                                                <td></td>
                                                <td>Rp</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                            </div>
                        </div>
                    </div>

                    <!-- isi detail checkout -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center" style='color: #c18f59;'> Express Check Out</h3>
                                <div class="mt-3 text-center">
                                    <a href="" class="btn btn-light mb-2">
                                        <img src="https://1.bp.blogspot.com/-NwSMFZdU8l4/XZxj8FxN6II/AAAAAAAABdM/oTjizwstkRIqQZ7LOZSPMsUG3EYXF3E4wCEwYBhgL/s1600/logo-gopay-vector.png" alt="Go-Pay"  height="30px">
                                    </a>
                                    <a href="" class="btn btn-light mb-2">
                                        <img src="https://1.bp.blogspot.com/-Iq0Ztu117_8/XzNYaM4ABdI/AAAAAAAAHA0/MabT7B02ErIzty8g26JvnC6cPeBZtATNgCLcBGAsYHQ/s1000/logo-ovo.png" alt="OVO"  height="30px">
                                    </a>
                                    <a href="" class="btn btn-light mb-2">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/1200px-Logo_dana_blue.svg.png" alt="Dana"  height="30px">
                                    </a>
                                </div>

                                <h6 style='color: #c18f59;'>Shipping Address</h6>

                                <form class="row g-3 mt-4">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nama Depan">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Nama Belakang">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input type="text" class="form-control" placeholder="Telephone">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input type="text" class="form-control" placeholder="Alamat">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" class="form-control" placeholder="Kelurahan">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" class="form-control" placeholder="Kecamatan" name="">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" class="form-control" placeholder="Provinsi">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" class="form-control" placeholder="Kode Pos">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input type="text" class="form-control" placeholder="Rincian Alamat Tambahan (Opsional)">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input type="text" class="form-control" placeholder="Bank">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input type="text" class="form-control" placeholder="Pesan Sampaikan Kepada Penjual">
                                    </div>

                                    <!-- <div class="col-md-4">
                                        <label for="inputState" class="form-label">State</label>
                                        <select" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                        </div>
                                    </div> -->
                                    <div class="col-12 text-right mt-3">
                                        <button type="submit" class="brand-button"> Continue To Payment</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

               </div>






            </div>
        </section>
	<!-- Container end -->

    @endsection