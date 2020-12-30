@extends('layoutAdmin/layout')

      @section('title', 'Tambah Data Order ')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Form Tambah Data </h3>
                        <form method="post" action="{{route('order.store')}}">
                          @csrf
                              <div class="form-group row mt-4 ml-4">
                                  <label for="id_customer" class="col-sm-2 col-form-label">Customer</label>
                                  <div class="col-sm-6">
                                    <select class="form-control" id="exampleFormControlSelect1" required name="customer_id">
                                      @foreach($customer as $customer)
                                      <option value="{{$customer->id}}">{{$customer->id}} - {{$customer->nama}}</option>
                                      @endforeach
                                  </select>
                                  <div class="col-sm-4">
                                  </div>
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                <label for="id_item" class="col-sm-2 col-form-label">Item</label>
                                <div class="col-sm-6">
                                  <select class="form-control" id="exampleFormControlSelect1" required name="item_id">
                                    @foreach($item as $item)
                                    <option value="{{$item->id}}">{{$item->id}} - {{$item->nama}}</option>
                                    @endforeach
                                </select>
                                <div class="col-sm-4">
                                </div>
                                </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                                  <div class="col-sm-6">
                                  <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Masukan Quantity . . .">
                                  </div>
                                  <div class="col-sm-4">
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <label for="status" class="col-sm-2 col-form-label">Status</label>
                                  <div class="col-sm-6">
                                  <input type="text" class="form-control" id="status" name="status" placeholder="Masukan status . . .">
                                  </div>
                                  <div class="col-sm-4">
                                  </div>
                              </div>
                              <div class="form-group row mt-4 ml-4">
                                  <div class="col-sm-2 col-form-label">
                                  <button type="submit" class="btn btn-primary"> Simpan</button>
                                  </div>
                              </div>
                          </form>
                        </div>
                    </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->			
      </div><!-- /row -->
  
@endsection