@extends('layoutAdmin/layout')

      @section('title', 'Second Things - Item')

      @section('container')
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h3> Tabel Barang </h3>
                                    <div class="new-data">
                                        <a href="{{url('/item_admin/create')}}" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Input Data</a>
                                    </div>
                                    <div class="table table-responsive mt-3">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Item's Name</th>
                                                    <th>Item's Category</th>
                                                    <th>Stock</th>
                                                    <th>Price</th>
                                                    <th>Description</th>
                                                    <th>Picture</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($item as $item)
                                                <tr>
                                                    <td>{{$item->item_id}}</td>
                                                    <td>{{$item->nama}}</td>
                                                    <td>{{$item->kategori_id}}</td>
                                                    <td>{{$item->stok}}</td>
                                                    <td>Rp {{number_format($item->harga)}}</td>
                                                    <td>{{$item->keterangan}}</td>
                                                     <td height="20%" width="20%"><img src="{{ asset('gambar/'.$item->foto) }}" height="150px" width="150px" alt="" srcset=""></td> 
                                                    <td>
                                                            <a href="{{route('item_admin.edit',$item->item_id)}}" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a> 
                                                            <form action="{{route('item_admin.destroy',$item->item_id)}}" method="post" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-outline-danger">
                                                                <i class="fa fa-trash-o"></i>
                                                                </button>
                                                            </form>
                                                    </td>
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