@extends('layoutAdmin/layout')

    @section('title', 'Second Things - Report')

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
                                <h3> Report </h3>
                                    <div class="new-data">
                                        <a href="{{ route('print') }}" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-print"></i>Print </a>
                                    </div>
                                        <table class="table mt-3">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Order ID</th>
                                                    <th>Item ID</th>
                                                    <th>Item's Name</th>
                                                    <th>Qty</th>
                                                    <th>SubTotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($report_order as $r)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{$r->order_id}}</td>
                                                        <td>{{$r->item_id}}</td>
                                                        <td>{{$r->item->nama}}</td>
                                                        <td>{{$r->qty}}</td>
                                                        <td>Rp {{number_format($r->item->harga * $r->qty)}}</td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <?php
                                                        $subtotal = 0;
                                                        $jmlh = 0;
                                                        foreach($report_order as $key=>$value)
                                                        {
                                                            $hasil = $value->qty * $value->item->harga;
                                                            $subtotal+= $hasil;

                                                            $jmlh+= $value->qty;
                                                        }
                                                    ?>
                                                    <td colspan="4"><center>Total Income</center></td>
                                                    <td>{{number_format($jmlh)}}</td>
                                                    <td>Rp {{number_format($subtotal)}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                </div><!-- /col-lg-4 -->			
        </div><!-- /row -->


@endsection