@extends('publik/layout/apps')

    @section('title', 'Pesan')

    @section('container')
    <section class="fh5co-books">
	<div class="site-container">
        <h2 class="universal-h2 universal-h2-bckg mt-5">Pesan</h2>
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="books-brand-button " style="text-align : left">
                <a href="/item_publik" class="brand-button"><i class="fa fa-arrow-left"> Kembali</i></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                            <img src="{{ asset('gambar/'.$item->foto) }}" width="240px" hight="300px" alt="">
                            </div>
                            <div class="col-sm-8 mt-5">
                                <h3>{{ $item->nama}}</h3> 
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td> : </td>
                                            <td>Rp.{{$item->harga}} </td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td> : </td>
                                            <td>{{$item->stok}} item</td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td> : </td>
                                            <td>{{$item->keterangan}}</td>
                                        </tr>
                                        <form action="" method="post">
                                            <tr>
                                                <td>Jumlah Pesan</td>
                                                <td> : </td>
                                                <td><form method="post" action="{{ url('/pesan') }}/{{ $item->id }}">
                                                    @csrf
                                                    <input type="text" name="jumlah_pesan" class="form-control col-2" required="" id="sst" maxlength="12" value="1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td> </td>
                                                <td>
                                                    <div class="books-brand-button mt-2">
                                                    <button type="submit" class="brand-button"><i class="fa fa-shopping-cart"> Add To Cart</i></button>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	    </div>
    </section>

@endsection