@extends('layoutAdmin/layout')

      @section('title', 'Second Things - Incoming Item')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h2> Incoming Item</h2>
                                    <div class="new-data">
                                        <a href="/barang_masuk/create" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Input Data</a>
                                    </div>
                                    <div class="table mt-3">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Picture</th>
                                                    <th>Item</th>
                                                    <th>User ID</th>
                                                    <th>Distributor ID</th>
                                                    <th>Qty</th>
                                                    <th>Price</th>
                                                    <th>Subtotal</th>
                                                    <th>Go-Pay</th>
                                                    <th>No Resi</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($barang_masuk as $brng)
                                                <tr>
                                                    <th>{{$brng->incoming_id}}</th>
                                                    <td><img src="{{ asset('incom_item/'.$brng->foto) }}" width="100px" alt=""></td>
                                                    <td>{{$brng->item}}</td>
                                                    <td>{{$brng->user->name}}</td>
                                                    <td>{{$brng->distributor_id}}</td>
                                                    <td>{{$brng->jumlah}}</td>
                                                    <td>Rp {{number_format($brng->harga)}}</td>
                                                    <td>Rp {{number_format($brng->subtotal)}}</td>
                                                    <td>{{$brng->gopay}}</td>

                                                    <form action="{{route('barang_masuk.update',$brng->incoming_id)}}" method="post">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="item" value="{{$brng->item}}">
                                                    <input type="hidden" name="user_id" value="{{$brng->user_id}}">
                                                    <input type="hidden" name="distributor_id" value="{{$brng->distributor_id}}">
                                                    <input type="hidden" name="jumlah" value="{{$brng->jumlah}}">
                                                    <input type="hidden" name="harga" value="{{$brng->harga}}">
                                                    <input type="hidden" name="subtotal" value="{{$brng->subtotal}}">
                                                    <input type="hidden" name="gopay" value="{{$brng->gopay}}">

                                                    <td><input type="text" required class="form-control" value="{{$brng->resi}}" minlenght="12" maxlength="12" name="resi"></td>
                                                    <td>
                                                        <select required name="status" id="" value="{{$brng->status}}" class="form-control">
                                                            <option value="{{$brng->status}}">{{$brng->status}}</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="Proceed">Proceed</option>
                                                            <option value="Shipping">Shipping</option>
                                                            <option value="Deny">Deny</option>
                                                            <option value="Confirmed">Confirmed</option>
                                                        </select>
                                                    </td>
                                                    <th>
                                                        <!-- <a href="{{route('barang_masuk.update',$brng->incoming_id)}}" class="btn btn-warning"><i class="fa fa-edit"></i> </a>  -->
                                                        <button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                    </form>
                                                            
                                                            <form action="{{route('barang_masuk.destroy',$brng->incoming_id)}}" method="post" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger">
                                                                <i class="fa fa-trash-o"></i>
                                                                </button>
                                                            </form>
                                                    </th>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                    </div><!-- /content-panel -->
                 </div><!-- /col-lg-4 -->			
          </div><!-- /row -->


@endsection