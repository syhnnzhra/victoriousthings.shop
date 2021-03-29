@extends('layoutAdmin/layout')

    @section('title', 'Second Things - Report')

    @section('container')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <section id="main-content">
            <section class="wrapper">
                    <div class="row mt-4">
                        <div class="col-lg-12">
                                    <div class="content-panel">
                                        <div class="content ml-4">
                                            <h3> Report </h3>
                                                <div class="new-data mb-3">
                                                    <a href="{{ route('print') }}" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-print"></i>Print </a>
                                                </div>
                                                <form action="" method="get">
                                                    {{csrf_field()}}
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <select class="form-control" required name="province" id="province">
                                                                <option value="01">JANUARI</option>
                                                                <option value="02">FEBRUARI</option>
                                                                <option value="03">MARET</option>
                                                                <option value="04">APRIL</option>
                                                                <option value="05">MEI</option>
                                                                <option value="06">JUNI</option>
                                                                <option value="07">JULI</option>
                                                                <option value="08">AGUSTUS</option>
                                                                <option value="09">SEPTEMBER</option>
                                                                <option value="10">OKTOBER</option>
                                                                <option value="11">NOVEMBER</option>
                                                                <option value="12">DESEMBER</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select class="form-control" required name="province" id="province">
                                                                <option value="2021">2021</option>
                                                                <option value="2020">2020</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <button class="btn btn-outline-primary">Filter</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                    <table class="table mt-3">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Order ID</th>
                                                                <th>Item ID</th>
                                                                <th>Item's Name</th>
                                                                <th>Harga</th>
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
                                                                    <td>Rp {{number_format($r->item->harga) }}</td>
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
                                                                <td colspan="5"><center>Total Income</center></td>
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