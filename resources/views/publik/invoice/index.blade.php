@extends('publik/layout/layout')

    @section('title', 'Transaction')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books" style="font-family: 'Calisto-MT';">
           <div class="site-container">
		   <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size:35px ;color: #c18f59;'>Transaction</h2>
                <ul class="list-group"  style='font-size:20px; color: #c18f59;'>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="row">No</th>
                                <th>Nama</th>
                                <!-- <th>Subtotal</th> -->
                                <th>Tanggal Pembelian</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($odetail as $o) 
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$o->nama}}</td>
                                    <!-- <td>{{$o->subtotal}}</td> -->
                                    <td>{{$o->created_at}}</td>
                                    <td>
                                        <a href="{{ route('transaction.show', $o->id) }}" class="btn btn-warning btn-sm">Detail</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td>Anda Belum Melakukan Transaksi</td>
                                </tr>

                                @endforelse
                            </tbody>
                        </table>
                </ul>
        </section>
	<!-- Container end -->

    @endsection