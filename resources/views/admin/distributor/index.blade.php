@extends('layoutAdmin/layout')

      @section('title', 'Second Things - Distributor')

      @section('container')
        <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
            <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h3> Distributor </h3>
                                    <div class="new-data">
                                        <a href="/distributor/create" class="btn btn-outline-success btn-lg mt-3"><i class="fa fa-plus"></i> Input Data</a>
                                    </div>
                                        <table class="table mt-3">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Company Name</th>
                                                    <th>Address</th>
                                                    <th>Email</th>
                                                    <th>Telephone</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($distributor as $distributor)
                                                <tr>
                                                    <td>{{$distributor->distributor_id}}</td>
                                                    <td>{{$distributor->nama}}</td>
                                                    <td>{{$distributor->alamat}}</td>
                                                    <td>{{$distributor->email}}</td>
                                                    <td>{{$distributor->telephone}}</td>
                                                    <td>
                                                        <a href="{{route('distributor.edit',$distributor->distributor_id)}}" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a> 
                                                            <form action="{{route('distributor.destroy',$distributor->distributor_id)}}" method="post" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-o"></i></button>
                                                            </form>
                                                    </td>
                                                    </tr>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                 </div><!-- /col-lg-4 -->			
          </div><!-- /row -->


@endsection