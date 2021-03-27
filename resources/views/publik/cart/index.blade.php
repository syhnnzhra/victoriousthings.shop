@extends('publik/layout/layout')

    @section('title', 'Second Things - Cart')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books" style="font-family: 'Calisto-MT';">
           <div class="site-container">
		   <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size:35px ;color: #c18f59;'>Cart</h2>
                <!--================Home Banner Area =================-->
                    <section class="banner_area">
                        <div class="banner_inner d-flex align-items-center">
                            <div class="container">
                                <div class="banner_content text-center">
                                    <!-- <h2>Keranjang Belanja</h2> -->
                                    <div class="page_link">
										<div class="card mb-5">
											<div class="card-body" style="color: #C18F59;">
														<h4 class="card-title text-left">Shipping Address</h4>
												<div class="row">
													<div class="col-sm-10 text-left">
														<p class="card-text text-left">{{Auth::user()->name}} | {{Auth::user()->alamat}}, {{Auth::user()->city->title}}, {{Auth::user()->province->title}} | {{Auth::user()->kode_pos}}
														<!-- <a href="#" class="btn btn-info btn-sm"><span>Ubah</span></a></p> -->
													</div>
													<div class="col-sm-2" style="color:#212529;">
														<a href="">EDIT</a>
													</div>
												</div>
											</div>
										</div>
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

					<div class="card mb-5">
						<div class="card-body">
                    <div class="table-responsive">
					<table class="table" style='color: #c18f59;'>
						<thead>
							<tr>
								<th scope="col">Item</th>
								<th scope="col"></th>
								<th scope="col">Size</th>
								<th scope="col">Price</th>
								<th scope="col">Qty</th>
								<th scope="col">Subtotal</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
                        @forelse ($carts as $row)
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
                                    <h6>{{$row->pesan}}</h6>
								</td>
								<td>
                                    <h6>Rp {{ number_format($row->item->harga) }}</h6>
								</td>
								<td>
                                    <h6>{{$row->qty}}</h6>
								</td>
								<!-- <td>
									<div class="product_count mt-2" id="only-number">

                                    <input type="number" name="qty[]" id="number" maxlength="12" value="{{ $row['qty'] }}" title="Quantity" class="form-input col-sm-4" min="1" readonly> -->
										<!-- <button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
										 class="increase items-count" type="button">
											<i class="lnr lnr-chevron-up"></i>
										</button>
										<button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
										 class="reduced items-count" type="button">
											<i class="lnr lnr-chevron-down"></i>
										</button> -->
									<!-- </div>
								</td> -->
								<td>
                                    <h6>Rp {{ number_format($row->qty * $row->item->harga) }}</h6>
                                </td>
								<td>
                                    <p>
											<form action="{{route('cart.destroy',$row->cart_id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                    <button type="submit" class="brand-button btn-sm">
                                                        <i class="fa fa-trash"></i>
														Delete
                                                    </button>
                                            </form>
									</p>
                                </td>
							</tr>

                                @empty
                            <tr>
                                <td colspan="4">You haven't selected an item</td>
                            </tr>
                            @endforelse
                            <!-- <tr class="bottom_button text-center">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td colspan="2">
									<div class="books-brand-button">
										<button class="brand-button">Update Cart</button>
									</div>
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
									<!-- <p> Opsi Pengiriman</p> -->
								</div>
								<div class="col-sm-4">
                                    <?php
                                        $ongkir = 0;
                                        $jne = 12000;
                                        $jnt =15000;
                                        if ($ongkir == $jne) {
                                            $jne;
                                        }else{
                                            $jnt;
                                        }
                                    ?>
                                    <!-- <select class="form-control col-sm-6" id="exampleFormControlSelect1" required name="ongkir">
                                        <option value="{{$jne}}">JNE Rp {{number_format($jne)}}</option>
                                        <option value="{{$jnt}}">JNT Rp {{number_format($jnt)}}</option>
                                    </select> -->
								</div>
								<div class="col-sm-3">
									<label> Total</label>
								</div>
								<div class="col-sm-3">
                                <!-- itungan subtotal -->
                                    <?php
                                        $subtotal = 0;
                                        foreach($carts as $key=>$value)
                                        {
                                            $hasil = $value->qty * $value->item->harga;
                                            $subtotal+= $hasil;
                                            $grandtot=$ongkir+$subtotal;
                                        }
                                    ?>
									<p> Rp {{number_format($subtotal)}}
									</p>
								</div>
							</div>
						</div>
					</div>


						<section>
						<div class="mt-4 ">
							<div class="row">
								<div class="col-4">
								</div>
								<div class="col-4">
									<div class="books-brand-button text-center">
											<a href="{{route('checkout.index')}}" type="submit" class="brand-button"><i class="fas fa-cash-register"> Check Out</i></a>
									</div>
								</div>
								<div class="col-4">
								</div>
							</div>
						</div>
						</section>


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

    @endsection