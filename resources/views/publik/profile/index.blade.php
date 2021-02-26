
@extends('publik/layout/layout')

    @section('title', 'My Profile')


    @section('container')
      <section class="fh5co-books">
           <div class="site-container">
                  <div class="poto-wrapper">
                  <div class="text-center mt-2">
                    <img src="{{ asset('assets/images/profile.png')}}" width="150px" class="logo text-center" style="align: center">
                    <h4 class="mt-3" style="color:#c18f59;">{{Auth::user()->name}} </h4>
                    <div class="books-brand-button">
                      <a href="{{route('prof.edit', Auth::user()->user_id )}}" class="brand-button" style="width: 65%;">Edit Profile</a>
                    </div>
                  </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="mt-2">
                    <h5  style="color:#c18f59;"> Order Saya (0)</h5>
                      <div class="mt-4">
                        @forelse ($odetail as $det)
                        <h5> {{$det->nama}} </h5>
                        @empty 
                        <p> Anda Belum Melakukan Transaksi</p>
                        @endforelse
                      </div>
                    </div>
                  </div>
              </div>
           </div>
    </section>
    @endsection