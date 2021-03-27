@extends('layoutAdmin/layout')

      @section('title', 'Second Things - Dashboard')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        @if(Auth::user()->level == 'admin')
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <!-- <h1> Hello! {{Auth::user()->name}}</h1> -->
              <h1>
                <center>Hello! {{Auth::user()->name}}</center>
                <center>Welcome to My Knit</center>
              </h1>
              <h2 class="ml-5 mt-4">Latest Product</h2>
              <div class="row row-cols-1 row-cols-sm-5 g-4 ml-3 mr-3 mt-5 mb-5">
                  @foreach ($item as $item)
                  <div class="col mt-3">
                    <div class="card h-100">
                      <img src="{{ asset('gambar/'.$item->foto) }}" width="100%" height="60%" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h3 class="card-title text-center">{{$item->nama}}</h3>
                        <h5 class="text-center"> Rp {{number_format($item->harga)}}</h5>
                        <h5 class="card-text">{{$item->keterangan}}</h5>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">{{$item->updated_at}}</small>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
            </div>
          </div>
        </div>
        @endif

@endsection
    