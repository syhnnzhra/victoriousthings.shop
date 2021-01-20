@extends('publik/layout/layout')

    @section('title', 'detail product')

    @section('container')
    <section class="fh5co-books">
	<div class="site-container">
        <h2 class="universal-h2 universal-h2-bckg mt-5">Detail</h2>
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="books-brand-button " style="text-align : left">
                <a href="/kategori_publik" class="brand-button"><i class="fa fa-arrow-left"> Kembali</i></a>
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
                                            <td>Rp {{number_format($item->harga)}} </td>
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