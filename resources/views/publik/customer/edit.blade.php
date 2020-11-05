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
                        <form action="{{route('customer_publik.store')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="inputAddress2">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">No Telephone</label>
                                <input type="text" class="form-control" name="no_telp">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                                <fieldset>
                                    <button type="submit" id="form-submit"  class="main-button">Kirim</button>
                                </fieldset>
                            </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->

                    </div>
                </div>
                
            </div>
        </div>
    </section>
      @endsection