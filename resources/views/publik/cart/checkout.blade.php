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
                                                    $ongkir = 1000;
                                                ?>
                                                <td></td>
                                                <td>Ongkos Kirim</td>
                                                <td></td>
                                                <td  colspan="2">
                                                    Rp {{number_format($ongkir)}}
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
                                <form method="post" action="{{route('checkout.store')}}">
                                @csrf
                                        <input type="hidden" name="user_id" value="{{Auth::user()->user_id }}">
                                        <input type="hidden" name="subtotal" value="{{($grandtot)}}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{ Auth::user()->name }}" required>
                                        </div>
                                        <div class="col-md-6" id="only-number">
                                            <input type="text" id="number" class="form-control" placeholder="Telephone" name="telephone" required maxlength="13" minlength="12">
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <input type="text" class="form-control" placeholder="Alamat Lengkap" name="alamat" value="{{ Auth::user()->alamat }}" required>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <input type="text" class="form-control" placeholder="Kota" name="kota" value="{{ Auth::user()->city->nama }}" required>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <input type="text" id="number" class="form-control" placeholder="Telephone" name="provinsi" required value="{{Auth::user()->province->nama}}">
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Masukan Kode Pos" name="kode_pos" value="{{ Auth::user()->city->postal_code }}" required>
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
    <script>
        sendOrder() {
        //Mengosongkan var errorMessage dan message
        this.errorMessage = ''
        this.message = ''
        
        //jika var customer.email dan kawan-kawannya tidak kosong
        if (this.customer.email != '' && this.customer.name != '' && this.customer.phone != '' && this.customer.address != '') {
            //maka akan menampilkan kotak dialog konfirmasi
            this.$swal({
                title: 'Kamu Yakin?',
                text: 'Kamu Tidak Dapat Mengembalikan Tindakan Ini!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Iya, Lanjutkan!',
                cancelButtonText: 'Tidak, Batalkan!',
                showCloseButton: true,
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    return new Promise((resolve) => {
                        setTimeout(() => {
                            resolve()
                        }, 2000)
                    })
                },
                allowOutsideClick: () => !this.$swal.isLoading()
            }).then ((result) => {
                //jika di setujui
                if (result.value) {
                    //maka submitForm akan di-set menjadi true sehingga menciptakan efek loading
                    this.submitForm = true
                    //mengirimkan data dengan uri /checkout
                    axios.post('/checkout', this.customer)
                    .then((response) => {
                        setTimeout(() => {
                            //jika responsenya berhasil, maka cart di-reload
                            this.getCart();
                            //message di-set untuk ditampilkan
                            this.message = response.data.message
                            //form customer dikosongkan
                            this.customer = {
                                name: '',
                                phone: '',
                                address: ''
                            }
                            //submitForm kembali di-set menjadi false
                            this.submitForm = false
                        }, 1000)
                    })
                    .catch((error) => {
                        console.log(error)
                    })
                }
            })
        } else {
            //jika form kosong, maka error message ditampilkan
            this.errorMessage = 'Masih ada inputan yang kosong!'
        }
    }
    </script>
    @endsection
