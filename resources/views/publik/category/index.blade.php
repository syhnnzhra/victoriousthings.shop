@extends('publik/layout/layout')

    @section('title', 'Category')

    @section('container')
	<!-- container-->
	<section class="fh5co-books">
		<div class="site-container mt-5">
            <div class="kategori">
				@foreach ($categori as $ct)
			<a href="{{ route('kategorip',$ct->id) }}" class="universal-h2 mt-5 mr-3 " style='font-size: 20px ;color: #c18f59;'>{{$ct->nama}}</h2></a>
				@endforeach
            </div>
			<div class="row">
		<div class="books">
		@foreach ($item as $item)
		  <div class="col-lg-3 col-md- col-sm-12">
			  <div class="single-book">
				  <a href="{{route('detailkat.show',$item->id)}}" class="single-book__img" >
					 <img src="{{ asset('gambar/'.$item->foto) }}" alt="single book and cd" height="300px" >
					 <div class="single-book_download">
						 <span style="font-size:14px; color:#c18f59" alt="book image">{{$item->keterangan}} <p>Klik for Detail</p></span>
					 </div>
				 </a>
				 <h4 class="single-book__title">{{$item->nama}}</h4>
				 <span class="single-book__price">Rp {{number_format($item->harga)}}</span>
				 <!-- star button -->
				 <div class="books-brand-button mt-3">
					 <a href="{{url('/cart',$item->id)}}" class="brand-button">Pesan</a>
				 </div>
			 </div>
		 </div>
			 @endforeach
		 </div>
			 </div>
		 </div>
	 </section>
	<!-- endcontainer  -->
        
            
@endsection