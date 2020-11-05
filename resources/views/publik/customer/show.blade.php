@extends('publik/layout/apps')

      @section('title', 'My Profile')


      @section('container')
      <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <div class="profil">
                            <img src="{{asset('assets/images/profile.png')}}" width="175px"></img>
                        </div>
                        <div class="nama mt-4">
                            <h2 class="section-title">My Profile</h2>
                        </div>
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

                        <div class="table text-center">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">{{$customer->nama}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Telephone</th>
                                        <th scope="col">{{$customer->no_telp}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">{{$customer->alamat}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">{{$customer->jenis_kelamin}}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->

                    </div>
                </div>
                
            </div>
        </div>
    </section>
      @endsection