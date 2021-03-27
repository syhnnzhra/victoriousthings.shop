
@extends('publik/layout/layout')

@section('title', 'Second Things - My Profile')

@csrf
@section('container')
<section class="fh5co-books">
    <div class="site-container">
        <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size: 35px ; color: #c18f59;'>Profile</h2>
        <form action="{{route('prof.update',$data->id)}}" method="post">
            @Method('PUT')
            @csrf
                <div class="container">
                    <div class="main-body">
                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <a id="" style='font-size:25px ;color: #c18f59;' href="/prof" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                            </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Nama</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="name" value="{{ $data ? $data->name : '' }}">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Jenis Kelamin</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <select class="form-control kota-tujuan" name="jeniskelamin" id="kota-tujuan">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Tanggal Lahir</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="date" name="tanggal_lahir" value="{{ $data ? $data->tanggal_lahir : '' }}">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="alamat" value="{{ $data ? $data->alamat : '' }}">
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Provinsi</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <select class="form-control" required name="province_id" id="">
                                                <option value="">Pilih Provinsi</option>
                                                @foreach($prov as $p)
                                                    <option value="{{ $p->province_id }}">{{ $p->type }} {{ $p->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Kota</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <select class="form-control" required name="city_id" id="">
                                                <option value="">Pilih Kota</option>
                                                @foreach($city as $c)
                                                    <option value="{{ $c->city_id }}">{{ $c->type }} {{ $c->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-outline-success">ubah</button>
                            </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
    </div>
</section>
@endsection