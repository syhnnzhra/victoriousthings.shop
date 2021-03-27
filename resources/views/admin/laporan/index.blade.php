@extends('layoutAdmin/layout')

    @section('title', 'laporan')

    @section('container')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <section id="main-content">
            <section class="wrapper">
                <br>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pilih Sesuai Bulan
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">JANUARI</a>
                        <a class="dropdown-item" href="#">FEBRUARI</a>
                        <a class="dropdown-item" href="#">MARET</a>
                        <a class="dropdown-item" href="#">APRIL</a>
                        <a class="dropdown-item" href="#">MEI</a>
                        <a class="dropdown-item" href="#">JUNI</a>
                        <a class="dropdown-item" href="#">JULI</a>
                        <a class="dropdown-item" href="#">AGUSTUS</a>
                        <a class="dropdown-item" href="#">SEPETEMBER</a>
                        <a class="dropdown-item" href="#">OKTOBER</a>
                        <a class="dropdown-item" href="#">NOVEMBER</a>
                    </div>
                    </div>
                    <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pilih Sesuai Tahun
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">2021</a>
                        <a class="dropdown-item" href="#">2020</a>
                        <a class="dropdown-item" href="#">2019</a>
                        <a class="dropdown-item" href="#">2018</a>
                    </div>
                    </div>
            <div class="row mt-4">
            <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h3> Tabel Report </h3>
                                    <div class="new-data">
                                        <a href="{{ route('print') }}" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-print"></i>Cetak </a>
                                    </div>
                                        <table class="table mt-3">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Order ID</th>
                                                    <th>Item ID</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah Barang</th>
                                                    <th>SubTotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($report_order as $r)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{$r->order_id}}</td>
                                                        <td>{{$r->item_id}}</td>
                                                        <td>{{$r->nama}}</td>
                                                        <td>{{$r->qty}}</td>
                                                        <td>Rp {{$r->subtotal}}</td>
                                                        {{-- <td>Rp {{number_format($o->qty * $o->item->harga)}}</td> --}}
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="4"><center>Jumlah Pendapatan</center></td>
                                                    <td>25</td>
                                                    <td>20000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                </div><!-- /col-lg-4 -->			
        </div><!-- /row -->


@endsection