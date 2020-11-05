@extends('publik/layout/apps')

      @section('title', 'My Profile')


      @section('container')
      <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">My Profile</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <!-- <p>Maecenas pellentesque ante faucibus lectus vulputate sollicitudin. Cras feugiat hendrerit semper.</p> -->
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-9">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                      <div class="table-responsive">
                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                      </div>
                      
                      @foreach ($customer as $cu)
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                              {{$cu->id}} - {{$cu->nama}}
                          <a href="{{route('customer_publik.show',$cu->id)}}" class="badge badge-secondary">Detail</a>
                          </li>
                      @endforeach

                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->

                    </div>
                </div>
                
            </div>
        </div>
    </section>
      @endsection