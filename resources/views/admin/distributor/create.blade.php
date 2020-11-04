@extends('layoutAdmin/layout')

      @section('title', 'Tambah Data Distributor')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Form Tambah Data </h3>
                        <form method="post" action="/distributor">
                          @csrf
                              <div class="form-group row mt-4 ml-4">
                                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                  <div class="col-sm-6">
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama . . .">
                                  </div>
                                  <div class="col-sm-4">
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                  <div class="col-sm-6">
                                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat . . .">
                                  </div>
                                  <div class="col-sm-4">
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                                  <div class="col-sm-6">
                                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email . . .">
                                  </div>
                                  <div class="col-sm-4">
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <label for="telephone" class="col-sm-2 col-form-label">Telephone</label>
                                  <div class="col-sm-6">
                                  <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Masukan No Telephone . . .">
                                  </div>
                                  <div class="col-sm-4">
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <div class="col-sm-2 col-form-label">
                                  <button type="submit" class="btn btn-primary"> Update</button>
                                  </div>
                              </div>
                          </form>
                        </div>
                    </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->			
      </div><!-- /row -->
  
@endsection