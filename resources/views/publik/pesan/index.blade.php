@extends('publik/layout/apps')

    @section('title', 'Category')

    @section('container')
	<div class="site-container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $items->nama}}</h2>
            </div>
        </div>
	</div>
@endsection