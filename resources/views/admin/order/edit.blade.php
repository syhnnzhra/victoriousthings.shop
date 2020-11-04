@extends('layoutAdmin/layout')

      @section('title', 'Edit Data')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        <div class="row mt-4">
          <div class="col-lg-12">
                    <div class="content-panel">
                        <div class="content ml-4">
                            <h3> Form Edit Data </h3>
                                <form action="{{route('order.update',$order->id)}}" method="post">
                                @Method('PUT')
                                @csrf
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Customer </label>
                                        <div class="col-sm-6">
                                            <select class="form-control" id="exampleFormControlSelect1" required name="customer_id">
                                                @foreach($customer as $customer)
                                                <option value="{{$customer->id}}">{{$customer->id}} - {{$customer->nama}}</option>
                                                @endforeach
                                            </select></div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Barang </label>
                                        <div class="col-sm-6">
                                            <select class="form-control" id="exampleFormControlSelect1" required name="item_id">
                                                @foreach($item as $item)
                                                <option value="{{$item->id}}">{{$item->id}} - {{$item->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4 ml-4">
                                        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control" name="quantity"  placeholder="Masukan Quantity . . ." required value="{{$order->quantity}}">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="button ml-5 mb-4">
                                        <button type="submit" class="btn btn-outline-success">Update</button>
                                    </div>
                                </form>
                        </div>
                    </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->			
      </div><!-- /row -->
  
@endsection