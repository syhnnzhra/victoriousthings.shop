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
                                            </td>
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
