@extends('publik/layout/layout')

    @section('title', 'Check Out')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books" style="font-family: 'Calisto-MT';">
           <div class="site-container">
           <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size:35px ;color: #c18f59;'>Check Out</h2>
                <nav style="--bs-breadcrumb-divider: '>'; bg-color: white;" class="" aria-label="breadcrumb">
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
                                                <td> Ukuran</td>
                                                <td> Jumlah</td>
                                                <td class="text-right"> <b> Harga </b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                @forelse($carts as $p)
                                            <tr>
                                                <td> <img src="{{ asset('gambar/' . $p->item->foto) }}" width="100px" height="100px" alt="{{$p->item->nama}}"></td>
                                                <td class="text-left"> {{$p->item->nama}}</td>
                                                <td class="text-center">{{$p->pesan}}</td>
                                                <td class="text-center">{{$p->qty}}</td>
                                                <td class="text-right">Rp {{ number_format($p->item->harga * $p->qty) }}</td>
                                            </tr>
                                        
                                            @empty
                                    <tr>
                                        <td colspan="5">Tidak ada belanjaan</td>
                                    </tr>
                                @endforelse
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <?php
                                                    $Total = 0;
                                                    foreach($carts as $key=>$value)
                                                    {
                                                        $hasil = $value->qty * $value->item->harga;
                                                        $Total+= $hasil;
                                                    }
                                                ?>
                                                <td></td>
                                                <td>Total</td>
                                                <td></td>
                                                <td colspan="2">Rp {{number_format($Total)}}</td>
                                            </tr>
                                            <tr>
                                                <?php
                                                    $ongkir = 11000;
                                                ?>
                                                <td></td>
                                                <td>Ongkos Kirim</td>
                                                <td></td>
                                                <td  colspan="2">
                                                    <select name="">
                                                        <option value="" id="ongkir"></option>
                                                    </select>
                                                    <!-- Rp {{number_format($ongkir)}} -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <?php
                                                $grandtot=0;
                                                    foreach($carts as $key=>$value)
                                                    {
                                                        $grandtot = $Total + $ongkir;
                                                    }
                                                ?>
                                                <td></td>
                                                <td>Subtotal</td>
                                                <td></td>
                                                <td colspan="2">Rp {{number_format($grandtot)}}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <form action="{{url('/ongkir')}}" method="post" role="form">
                                    @csrf
                                        <div class="col-md-6 mt-3">
                                            <select class="form-control provinsi-tujuan" name="province_destination" id="provinsi-tujuan">
                                                <option value="0">Pilih Provinsi</option>
                                                @foreach ($provinces as $province => $value)
                                                    <option value="{{$province}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <select class="form-control kota-tujuan" name="city_destination" id="kota-tujuan">
                                                <option value="">Pilih Kota</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <input type="hidden" id="number" class="form-control" name="weight" value="1000">
                                        </div>
                                        <div class="col-md-8 mt-3">
                                            <select class="form-control kurir" id="courier" name="courier">
                                                <option value="0">Pilih Kurir</option>
                                                @foreach($couriers as $courier => $value)
                                                <option value="{{$courier}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <button type="submit" class="brand-button btn-check" id="btn-check"> Check Ongkir </button>
                                        </div>
                                    </form>
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
                                <form method="post" action="{{route('checkout.update', Auth::user()->id)}}">
                                @Method('PUT')
                                @csrf
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id }}">
                                        <input type="hidden" name="status" value="Sudah Dibayar">
                                        <input type="hidden" name="subtotal" value="{{($grandtot)}}">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Nama" name="first_name" value="{{ Auth::user()->name }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Nama" name="last_name" value="" required>
                                        </div>
                                        <div class="col-md-12 mt-3" id="only-number">
                                            <input type="text" id="number" class="form-control" placeholder="Telephone" name="telephone" required maxlength="13" minlength="12">
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <input type="text" class="form-control" placeholder="Alamat Lengkap" name="alamat" value="{{ Auth::user()->alamat }}" required>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <select class="form-control provinsi-tujuan" name="kota" id="">
                                                @foreach ($city as $p)
                                                    <option value="{{$p->city_id}}">{{$p->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <select class="form-control provinsi-tujuan" name="provinsi" id="">
                                                <option value="0">Pilih Provinsi</option>
                                                <!-- <option value="{{Auth::user()->province_id}}">{{Auth::user()->province->nama}}</option> -->
                                                @foreach ($provinces as $province => $value)
                                                    <option value="{{$province}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Kode Pos" name="kode_pos" value="{{ Auth::user()->kode_pos }}" required>
                                        </div>
                                        <div class="col-md-9 mt-3">
                                            <input type="text" class="form-control" placeholder="Rincian Alamat Tambahan (Opsional)" name="rincian_opsional">
                                        </div>
                                        
                                        <div class="col-md-12 mt-3">
                                            <input type="text" class="form-control" placeholder="Bank" name="bank" required >
                                        </div>
                                        <div class="col-12 text-right mt-3">
                                            <button type="submit" class="brand-button"> Continue To Payment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

               </div>






            </div>
        </section>
    <!-- Container end -->
    <script>
        $(function() {
        $('#only-number').on('keydown', '#number', function(e){
            -1!==$
            .inArray(e.keyCode,[46,8,9,27,13,110,190]) || /65|67|86|88/
            .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey)
            || 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey|| 48 > e.keyCode || 57 < e.keyCode)
            && (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
        });
        })
    </script>
    <script>
        $(function() {
        $('#only-number').on('keydown', '#number', function(e){
            -1!==$
            .inArray(e.keyCode,[46,8,9,27,13,110,190]) || /65|67|86|88/
            .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey)
            || 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey|| 48 > e.keyCode || 57 < e.keyCode)
            && (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
        });
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script>
        $('select[name="province_destination"]').on('change', function () {
            let provindeId = $('#province_destination').val();
            if (provindeId) {
                jQuery.ajax({
                    url: "{{url('/cities/')}}"+provindeId,
                    type: "GET",
                    dataType: "json",
                    data:{destination: $('#province_destination').val(), weight: $('#weight').val()},
                    success: function (response) {
                        $('select[name="city_destination"]').empty();
                        $('select[name="city_destination"]').append('<option value="">-- pilih kota tujuan --</option>');
                        $.each(response, function (key, value) {
                            $('select[name="city_destination"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                });
            } else {
                $('select[name="city_destination"]').append('<option value="">-- pilih kota tujuan --</option>');
            }
        });
    </script>
    @endsection
