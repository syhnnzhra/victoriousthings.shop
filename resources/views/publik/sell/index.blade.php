@extends('publik/layout/layout')

    @section('title', 'Second Things - Sell')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books" style="font-family: 'Calisto-MT';">
           <div class="site-container">
		   <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size:35px ;color: #c18f59;'>Sell</h2>

            <div class="button mb-3">
                <a href="{{route('sell.create')}}" class="brand-button">Jual Barang</a>
            </div>
            <!-- <div class="card-body"> -->
                <table class="table table-hover" style='color: #c18f59;'>
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Picture</td>
                            <td>Item's Name</td>
                            <td>Qty</td>
                            <td>Price</td>
                            <td>Subtotal</td>
                            <td>Go-pay Number</td>
                            <td>No Resi</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($incom as $i)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{ asset('incom_item/'.$i->foto) }}" width="100px" alt=""></td>
                            <td>{{$i->item}}</td>
                            <td>{{$i->jumlah}}</td>
                            <td>Rp {{number_format($i->harga)}}</td>
                            <td>Rp {{number_format($i->subtotal)}}</td>
                            <td>{{$i->gopay}}</td>
                            <td>{{$i->resi}}</td>
                            <td>{{$i->status}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            <!-- </div> -->
            
        </section>
	<!-- Container end -->

    @endsection