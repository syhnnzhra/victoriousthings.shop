@extends('publik/layout/layout')

    @section('title', 'Second Things - Category')

    @section('container')
	<!-- container-->
	<section class="fh5co-books">
		<div class="site-container mt-5">
            <div class="kategori">
				@foreach ($kat as $ct)
			<a href="{{ route('kategorip',$ct->category_id) }}" class="universal-h2 mt-5 mr-3 " style='font-size: 20px ;color: #c18f59;'>{{$ct->nama}}</h2></a>
				@endforeach
            </div>
			<div class="">
				<div class="input-group icons demo-2 mb-5">
                    <div class="demo-2 search mr-auto ml-3">
                        <form action="searchpublikkat" method="get">
                            {{csrf_field()}}
                            <span class="icon"><i class="fa fa-search" style='font-size:25px ;color: #c18f59;'></i></span>
                            <input type="search" name="searchp" id="search" placeholder=" Search here!"/>
                        </form>
                    </div>
				</div>
			</div>
			<div class="row">
		<div class="books">
		@forelse ($item as $item)
		  <div class="col-lg-3">
			  <div class="single-book">
				  <a href="{{url('/cart',$item->item_id)}}" class="single-book__img" >
					 <img src="{{ asset('gambar/'.$item->foto) }}" alt="single book and cd" height="300px" >
					 <div class="single-book_download">
						 <span style="font-size:14px; color:#c18f59" alt="book image">{{$item->keterangan}} <p>Klik for Detail</p></span>
					 </div>
				 </a>
				 <h4 class="single-book__title">{{$item->nama}}</h4>
				 <span class="single-book__price">Rp {{number_format($item->harga)}}</span>
				 <!-- star button -->
				 <div class="books-brand-button mt-3">
					 <a href="{{url('/cart',$item->item_id)}}" class="brand-button">Pesan</a>
				 </div>
			 </div>
		 </div>
		 @empty
                            <tr>
                                <td colspan="4">Tidak ada belanjaan</td>
                            </tr>
			 @endforelse
		 </div>
			 </div>
		 </div>
	 </section>
	<!-- endcontainer  -->
        
            
@endsection