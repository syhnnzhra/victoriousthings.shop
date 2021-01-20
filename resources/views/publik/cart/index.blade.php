@extends('publik/layout/apps')

    @section('title', 'Cart')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books">
           <div class="site-container">
               <h2 class="universal-h2 universal-h2-bckg mt-5" style='color: #c18f59;'>Keranjang Belanja</h2>
                <!--================Home Banner Area =================-->
                    <section class="banner_area">
                        <div class="banner_inner d-flex align-items-center">
                            <div class="container">
                                <div class="banner_content text-center">
                                    <!-- <h2>Keranjang Belanja</h2> -->
                                    <div class="page_link">
                                        <a href="{{ url('/') }}">Home</a>
                                        <a href="{{ route('front.list_cart') }}">Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <!--================End Home Banner Area =================-->
                <!--================Cart Area =================-->
	            <section class="cart_area">
                    <div class="container">
                        <div class="cart_inner">
                    
                    <!-- DISABLE BAGIAN INI JIKA INGIN MELIHAT HASILNYA TERLEBIH DAHULU -->
                    <!-- KARENA MODULENYA AKAN DIKERJAKAN PADA SUB BAB SELANJUTNYA -->
                    <!-- HANYA SAJA DEMI KEMUDAHAN PENULISAN MAKA SAYA MASUKKAN PADA BAGIAN INI -->
                            <form action="{{ route('front.update_cart') }}" method="post">
                                @csrf
                    <!-- DISABLE BAGIAN INI JIKA INGIN MELIHAT HASILNYA TERLEBIH DAHULU -->
                    <div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Category</th>
								<th scope="col">Price</th>
								<th scope="col">Description</th>
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
                                            <img src="{{ asset('gambar/' . $row['foto']) }}" width="100px" height="100px" alt="{{ $row['nama'] }}">
										</div>
										<div class="media-body">
                                            <p>{{ $row['nama'] }}</p>
										</div>
									</div>
								</td>
								<td>
                                    <h5>Rp {{ number_format($row['harga']) }}</h5>
								</td>
								<td>
									<div class="product_count">

                                    <!-- PERHATIKAN BAGIAN INI, NAMENYA KITA GUNAKAN ARRAY AGAR BISA MENYIMPAN LEBIH DARI 1 DATA -->
                                    <input type="text" name="qty[]" id="sst{{ $row['id'] }}" maxlength="12" value="{{ $row['qty'] }}" title="Quantity:" class="input-text qty">
                                                <input type="hidden" name="id[]" value="{{ $row['id'] }}" class="form-control">
                                    <!-- PERHATIKAN BAGIAN INI, NAMENYA KITA GUNAKAN ARRAY AGAR BISA MENYIMPAN LEBIH DARI 1 DATA -->

                                        <button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button">
											<i class="lnr lnr-chevron-up"></i>
										</button>
										<button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
										 class="reduced items-count" type="button">
											<i class="lnr lnr-chevron-down"></i>
										</button>
									</div>
								</td>
								<td>
                                    <h5>Rp {{ number_format($row['product_price'] * $row['qty']) }}</h5>
                                </td>
                            </tr>
                                @empty
                            <tr>
                                <td colspan="4">Tidak ada belanjaan</td>
                            </tr>
                            @endforelse
                            <tr class="bottom_button">
								<td>
									<button class="gray_btn">Update Cart</button>
								</td>
								<td></td>
								<td></td>
								<td></td>
                            </tr>
                            </form>
                            <tr>
								<td>

								</td>
								<td>

								</td>
								<td>
									<h5>Subtotal</h5>
								</td>
								<td>
                                   
								</td>
							</tr>
                            <!-- <tr class="shipping_area">
								<td></td>
								<td></td>
								<td>
									<h5>Shipping</h5>
								</td>
								<td>
									<div class="shipping_box">
										<ul class="list">
											<li>
												<a href="#">Flat Rate: $5.00</a>
											</li>
											<li>
												<a href="#">Free Shipping</a>
											</li>
											<li>
												<a href="#">Flat Rate: $10.00</a>
											</li>
											<li class="active">
												<a href="#">Local Delivery: $2.00</a>
											</li>
										</ul>
										<h6>Calculate Shipping
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</h6>
										<select class="shipping_select">
											<option value="1">Bangladesh</option>
											<option value="2">India</option>
											<option value="4">Pakistan</option>
										</select>
										<select class="shipping_select">
											<option value="1">Select a State</option>
											<option value="2">Select a State</option>
											<option value="4">Select a State</option>
										</select>
										<input type="text" placeholder="Postcode/Zipcode">
										<a class="gray_btn" href="#">Update Details</a>
									</div>
								</td>
							</tr> -->
                            <tr class="out_button_area">
								<td></td>
								<td></td>
								<td></td>
								<td>
									<div class="checkout_btn_inner">
										<a class="gray_btn" href="#">Continue Shopping</a>
										<a class="main_btn" href="#">Proceed to checkout</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
		    </div>
        </section>
        </section>
	<!-- Container end -->

    @endsection