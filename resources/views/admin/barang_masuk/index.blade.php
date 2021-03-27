@extends('layoutAdmin/layout')

      @section('title', 'Barang Masuk')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h2> Tabel Barang Masuk</h2>
                                    <div class="new-data">
                                        <a href="/barang_masuk/create" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
                                    </div>
                                    <div class="table mt-3">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Foto</th>
                                                    <th>Item</th>
                                                    <th>User ID</th>
                                                    <th>Distributor ID</th>
                                                    <th>Qty</th>
                                                    <th>Harga</th>
                                                    <th>Subtotal</th>
                                                    <th>Go-Pay</th>
                                                    <th>No Resi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
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
                                                    <td><input type="text" class="form-control" value="{{$brng->resi}}" minlenght="12" maxlength="12" name="resi"></td>
                                                    <td>
                                                        <select name="status" id="">
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