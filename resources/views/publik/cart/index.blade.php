@extends('publik/layout/bgputih')

    @section('title', 'Cart')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books" style="font-family: 'Calisto-MT';">
           <div class="site-container">
               <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size:35px ;color: #c18f59;'>Keranjang Belanja</h2>
                <!--================Home Banner Area =================-->
                    <section class="banner_area">
                        <div class="banner_inner d-flex align-items-center">
                            <div class="container">
                                <div class="banner_content text-center">
                                    <!-- <h2>Keranjang Belanja</h2> -->
                                    <div class="page_link">
										<div class="card mb-5">
											<div class="card-body" style="color: #C18F59;">
														<h4 class="card-title text-left">Alamat Pemesanan</h4>
												<div class="row">
													<div class="col-sm-10 text-left">
														<p class="card-text text-left">{{Auth::user()->name}} | +62876543210 | Jln Raya no 123 Bandung, Jawa Barat, 40001 </p>
														<!-- <a href="#" class="btn btn-info btn-sm"><span>Ubah</span></a></p> -->
													</div>
													<div class="col-sm-2" style="color:#212529;">
														<a href="">EDIT</a>
													</div>
												</div>
											</div>
										</div>
                                        <!-- <a href="{{ url('/') }}">Home</a>
                                        <a href="{{ route('front.list_cart') }}">Cart</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <!--================End Home Banner Area =================-->
                <!--================Cart Area =================-->
	            <section class="cart_area" style="font-family: 'Calisto-MT';">
                    <!-- <div class="container">
                        <div class="cart_inner"> -->
                    
                    <!-- DISABLE BAGIAN INI JIKA INGIN MELIHAT HASILNYA TERLEBIH DAHULU -->
                    <!-- KARENA MODULENYA AKAN DIKERJAKAN PADA SUB BAB SELANJUTNYA -->
                    <!-- HANYA SAJA DEMI KEMUDAHAN PENULISAN MAKA SAYA MASUKKAN PADA BAGIAN INI -->
                            <form action="{{ route('front.update_cart') }}" method="post">
                                @csrf
                    <!-- DISABLE BAGIAN INI JIKA INGIN MELIHAT HASILNYA TERLEBIH DAHULU -->
					<div class="card mb-5">
						<div class="card-body">
                    <div class="table-responsive">
					<table class="table" style='color: #c18f59;'>
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col"></th>
								<th scope="col">Harga</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
                        @forelse ($carts as $row)
						@if($item->id > 1)
							
						@else

						@endif
							<tr>
								<td>
									<div class="media">
										<div class="d-flex">
                                            <img src="{{ asset('gambar/' . $row->item->foto) }}" width="100px" height="100px">
										</div>
										<!-- <div class="media-body"> -->
										<div class="">
                                            <!-- <p>{{$row->item->nama}}</p> -->
										</div>
									</div>
								</td>
								<td>
                                    <h6>{{$row->item->nama}}</h6>
								</td>
								<td>
                                    <h6>Rp {{ number_format($row->item->harga) }}</h6>
								</td>
								<td>
									<div class="product_count mt-2">

                                    <!-- PERHATIKAN BAGIAN INI, NAMENYA KITA GUNAKAN ARRAY AGAR BISA MENYIMPAN LEBIH DARI 1 DATA -->
                                    <input type="text" name="qty[]" id="sst{{ $row['product_id'] }}" maxlength="12" value="{{ $row['qty'] }}" title="Quantity:" class="input-text qty">
                                        <input type="hidden" name="product_id[]" value="{{ $row['product_id'] }}" class="form-control">
                    				<!-- PERHATIKAN BAGIAN INI, NAMENYA KITA GUNAKAN ARRAY AGAR BISA MENYIMPAN LEBIH DARI 1 DATA -->
                    
                    
										<button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
										 class="increase items-count" type="button">
											<i class="lnr lnr-chevron-up"></i>
										</button>
										<button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
										 class="reduced items-count" type="button">
											<i class="lnr lnr-chevron-down"></i>
										</button>
									</div>
								</td>
								<td>
                                    <h6>Rp {{ number_format($row->item->harga * $row->qty) }}</h6>
                                </td>
							</tr>
								
                                @empty
                            <tr>
                                <td colspan="4">Tidak ada belanjaan</td>
                            </tr>
                            @endforelse
                            <!-- <tr class="bottom_button">
								<td>
									<button class="gray_btn">Update Cart</button>
								</td>
								<td></td>
								<td></td>
								<td></td>
                            </tr> -->
                            </form>
                            <!-- <tr>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>
									<h5>Subtotal</h5>
								</td>
								<td>
										Rp sekian
								</td>
							</tr> -->
						</tbody>
					</table>
					</div>
					</div>

		    </div>
        </section>
					<div class="card" style="font-family: 'Calisto-MT';color: #c18f59;">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-2">
									<p> Opsi Pengiriman</p>
									<!-- <label for=""> Pesan</label>
									<input type="text"> -->
								</div>
								<div class="col-sm-4">
										<select class="form-select col-6" id="inputGroupSelect01">
											<option selected>Pilih...</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									<!-- <p> Opsi Pengiriman</p> -->
									<!-- <label class="input-group-text">Op</label> -->
								</div>
								<div class="col-sm-3">
									<label> Total Pesanan</label>
								</div>
								<div class="col-sm-3">
									<p> Rp
										
									</p>
								</div>
							</div>
						</div>
					</div>


						<section>
						<div class="mt-4 ">
							<div class="row">
								<div class="col-8">
								</div>
								<div class="col-4">
									<a type="submit" href="/checkout" class="brand-button"><i class="fas fa-cash-register"> Check Out</i></a>
								</div>
							</div>
						</div>
						</section>


        </section>
	<!-- Container end -->

    @endsection