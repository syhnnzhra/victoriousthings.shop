@extends('publik/layout/layout')

    @section('title', 'Pesan')

    @section('container')
    <section class="fh5co-books">
	<div class="site-container zw   ">
        <h2 class="universal-h2 universal-h2-bckg mt-5 " style='font-size: 35px ;color: #c18f59;'>Pesan</h2>
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
                                <table class="table" name="cart">
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
                                        <form action="" method="post" name="cart">
                                            <tr name="line_items">
                                                <td>Jumlah Pesan</td>
                                                <td> : </td>
                                                <td>
                                                    <div class="row">
                                                    <div class="col-3 tambah">
                                                        <form method="post" action="{{ route('front.cart',$item->id) }}" >
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="text" name="qty" class="form-control-plaintext" required="" id="sst" maxlength="2" min="1" pattern="[0-9]*" readonly value="1" style="border:0;">
                                                    </div>

                                                    <div class="col-sm">
                                                        <input type="hidden" name="id" value="{{ $item->id }}" class="form-control">
                                                        <input type="hidden" name="status" value="Belum Dibayar" class="form-control">
                                                        <input type="hidden" name="order_id" value="0" class="form-control">

                                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                                        class="reduced items-count brand-button" type="button">
                                                        <i class="fa fa-minus"></i>
                                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                                        class="increase items-count brand-button" type="button">
                                                        <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                <tr>
                                                    </tr>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                            <td>Total</td>
                                            <td> : </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" name="total"  value="" script="$('form').jAutoCalc();" jAutoCalc="{qty} * {harga}" class="form-control">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> -->
                                        <tr class="col-4">
                                                <td>Ukuran</td>
                                                <td> : </td>
                                                <td><input type="text" name="pesan" class="form-control" placeholder="Masukan ukuran"></td>
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
@push('addon-script')
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script>
        $('form').jAutoCalc();
            $('form').jAutoCalc({
                attribute: 'jAutoCalc',
                thousandOpts: [',', '.', ' '],
                decimalOpts: ['.', ','],
                decimalPlaces: -1,
                initFire: true,
                chainFire: true,
                keyEventsFire: false,
                readOnlyResults: true,
                showParseError: true,
                emptyAsZero: false,
                smartIntegers: false,
                onShowResult: null,
                funcs: {},
                vars: {}
            });
    </script>
@endpush
