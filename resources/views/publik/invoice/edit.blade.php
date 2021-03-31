@extends('publik/layout/layoutwo')

    @section('title', 'Second Things - Transaction')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books" style="font-family: 'Calisto-MT';">
           <div class="site-container">
               <div class="layoutbg">
                <p class="textmediumbckg"> Thanks for Shopping !</p>
                <div class="garis"></div>
                                <div class="textkiri">
                                    <b>Name : </b>
                                    <p>{{$det->first_name}} {{$det->last_name}}</p>
                                    <b>Address : </b>
                                    <p>{{$det->alamat}}, {{$det->city->title}}, {{$det->province->title}}, {{$det->kode_pos}}</p>
                                    <b>Telephone : </b>
                                    <p>{{$det->telephone}}</p>
                                    <b>Payment Status : </b>
                                    <p>{{$det->payment_status}}</p>
                                </div>
                                <div class="textkanan">
                                    <img src="{{ asset( 'assets2/images/logo.png' )}}" width="200px" height="200px">
                                </div>
                                <div class="table-responsive">
                                    <div class="garisdot"></div>
                                    <table class="table" style="color: #99754e;">
                                        <thead>
                                            <td><b>No</b></td>
                                            <td><b>Item</b></td>
                                            <td></td>
                                            <td><b>Qty</b></td>
                                            <td><b>Price</b></td>
                                            <td><b>Subtotal</b></td>
                                            <!-- <td>Action</td> -->
                                        </thead>
                                        <tbody>
                                            @foreach($carts as $o)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <img src="{{ asset('gambar/' . $o->item->foto) }}" width="100px" height="100px">
                                                    </td>
                                                    <td>{{$o->item->nama}}</td>
                                                    <td>{{$o->qty}}</td>
                                                    <td>Rp {{number_format($o->item->harga)}}</td>
                                                    <td>Rp {{number_format($o->qty * $o->item->harga)}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>

                                            <tr>
                                                <td colspan="4"> </td>
                                                <td> Postal Fee</td>
                                                <td> Rp {{number_format($det->postal_fee)}} </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"> </td>
                                                <td> Total</td>
                                                <td> Rp {{number_format($det->subtotal)}}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                
                                    </div>
                </div>
           </div>
       </section>
       @endsection