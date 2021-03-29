@extends('publik/layout/layout')

    @section('title', 'Second Things - Check Out')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books" style="font-family: 'Calisto-MT';">
           <div class="site-container">
           <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size:35px ;color: #c18f59;'>Check Out</h2>
                <!-- <nav style="--bs-breadcrumb-divider: '>'; bg-color: white;" class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/cartp">Cart</a></li>
                        <li class="breadcrumb-item"><a href="#">Check Out</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                    </ol>
                </nav> -->
                <h6></h6>
               <div class="row">

                    <!-- review cart -->
                    <div class="col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                    <table class="table table-borderless table-responsive" style='color: #c18f59;'>
                                        <thead>
                                            <tr>
                                                <td> <b> Item </b></td>
                                                <td> </td>
                                                <td> Size</td>
                                                <td> Qty</td>
                                                <td class="text-right"> <b> Price </b></td>
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
                                                <input type="hidden" id="total" value="{{$Total}}">
                                            </tr>
                                            <tr>
                                                <?php
                                                    $ongkir = 11000;
                                                ?>
                                                <td></td>
                                                <td>Postal Fee</td>
                                                <td></td>
                                                <td  colspan="2">
                                                    <select class="form-control" required name="" id="ongkir">
                                                        <option value="" name="ongkir" id="ongkir">-Postal Fee-</option>
                                                    </select>
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
                                                <td>Grand Total</td>
                                                <td></td>
                                                <td colspan="2">
                                                    Rp <p id="barang"> </p>
                                                    <!-- Rp  -->
                                                </td>
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
                                <form method="post" action="{{route('checkout.update', Auth::user()->id)}}">
                                @Method('PUT')
                                @csrf
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id }}">
                                        <input type="hidden" name="status" value="Sudah Dibayar">
                                        <input type="hidden" id="inputan" name="subtotal" value="">
                                        <input type="hidden" id="postalfee" name="postal_fee" value="">
                                        <input type="hidden" value="9" name="province_from">
                                        <input type="hidden" value="23" name="origin" id="origin">
                                        <input type="hidden" value="250" name="weight" id="weight">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ Auth::user()->name }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="" required>
                                        </div>
                                        <div class="col-md-12 mt-3" id="only-number">
                                            <input type="text" id="number" class="form-control" placeholder="Telephone" name="telephone" required maxlength="13" minlength="12">
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <input type="text" class="form-control" placeholder="Alamat Lengkap" name="alamat" value="{{ Auth::user()->alamat }}" required>
                                        </div>
                                        <div class="col-sm-6 mt-3">
                                            <select class="form-control" required name="province" id="province">
                                                <option value="">Pilih Provinsi</option>
                                                @foreach ($provinces as $p)
                                                    <option value="{{$p->province_id}}">{{$p->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6 mt-3">
                                            <select class="form-control" required name="destination" id="destination">
                                                <option value="">Pilih Kota</option>
                                                <!-- @foreach ($city as $p)
                                                    <option value="{{$p->city_id}}">{{$p->type}} {{$p->title}}</option>
                                                @endforeach -->
                                            <select>
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Kode Pos" name="kode_pos" value="{{ Auth::user()->kode_pos }}" required>
                                        </div>
                                        <div class="col-md-9 mt-3">
                                            <input type="text" class="form-control" placeholder="Rincian Alamat Tambahan (Opsional)" name="rincian_opsional">
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <select class="form-control mt-3" required name="courier" id="courier">
                                                <option value="">Pilih Kurir</option>
                                                <option value="jne">JNE</option>
                                                <option value="pos">POS</option>
                                                <option value="tiki">TIKI</option>
                                            </select>
                                        </div> 
                                        <div class="col-md-12 mt-3">
                                            <input type="text" class="form-control" placeholder="Pesan Untuk Penjual" name="bank" required >
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function ()
        {
            jQuery('#province').on('change',function(){
                var provinceID = jQuery(this).val();
                if(provinceID)
                {
                    jQuery.ajax({
                        url : '/getCity/' +provinceID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            jQuery('select[name="destination"]').empty();
                            jQuery.each(data, function(key,value){
                                $('select[name="destination"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="destination"]').empty();
                }
            });
            $('#courier').on('change', function() {
                var courier = jQuery(this).val();
                let token            = $("meta[name='csrf-token']").attr("content");
                var origin           = $('#origin').val();
                var destination      = $('#destination').val();
                var courier          = $('#courier').val();
                var weight           = $('#weight').val();
                if(courier)
                {
                    jQuery.ajax({
                        url : '/cekongkir/',
                        type : "post",
                        dataType : "json",
                        data:{
                            _token:              token,
                            origin:              origin,
                            destination:         destination,
                            courier:             courier,
                            weight:              weight,
                        },
                        success:function(response)
                        {
                            jQuery('select[name="ongkir"]').empty();
                            $.each(response[0]['costs'], function (key, value) {
                                $('#ongkir').append('<option value="'+ value.cost[0].value +'">'+ response[0].code.toUpperCase()+' : <strong>'+value.service+'</strong> - Rp. '+value.cost[0].value+' ('+value.cost[0].etd+' hari)</option>')
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="ongkir"]').empty();
                }
            })
        });
            $('#ongkir').on('change', function() {
                var ongkir           = $('#ongkir').val();
                var subtotal           = $('#total').val();
                
                var total = parseInt(ongkir) + parseInt(subtotal);
                $("#barang").text(total);
                $("#inputan").val(total);
                $("#postalfee").val(ongkir);
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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    @endsection
