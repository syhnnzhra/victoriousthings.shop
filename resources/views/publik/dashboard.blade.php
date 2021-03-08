@extends('publik/layout/apps')

    @section('title', 'Welcome to My Knit')

    @section('container')
	<div id="demo" class="carousel slide" data-ride="carousel" style="">

		<!-- Indicators -->
		{{-- <ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
		</ul> --}}

		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<!-- Top banner -->
		<section class="fh5co-top-banner">
			<div class="top-banner__inner site-container">
				<div class="top-banner__image">
					<img src="{{asset('assets2/images/bg2.jpg')}}" alt="author image">
				</div>
				<div class="top-banner__text">
					<div class="top-banner__text-up">
						<span class="brand-span">For You</span>
						<h2 class="top-banner__h2">Diskon</h2>
					</div>
					<div class="top-banner__text-down">
						<h2 class="top-banner__h2">60%</h2>
						<span class="brand-span">Author, Writer, Traveler</span>
					</div>
					<p>One Man. One Mission. Can He Go Beyond?One Man. One Mission. Can He Go Beyond?</p>
					<a href="#" class="brand-button">Read bio > </a>
				</div>
			</div>
		</section>
	<!-- banner-2 -->
			</div>
			<div class="carousel-item">
				<section class="fh5co-top-banner">
					<div class="top-banner__inner site-container">
						<div class="top-banner__image">
							<img src="{{asset('assets2/images/bg1.jpg')}}" alt="author image">
						</div>
						<div class="top-banner__text">
							<div class="top-banner__text-up">
								<span class="brand-span">Hello!</span>
								<h2 class="top-banner__h2">New</h2>
							</div>
							<div class="top-banner__text-down">
								<h2 class="top-banner__h2">Collection</h2>
								<span class="brand-span">Author, Writer, Traveler</span>
							</div>
							<p>One Man. One Mission. Can He Go Beyond?One Man. One Mission. Can He Go Beyond?</p>
							<a href="#" class="brand-button">Read bio > </a>
						</div>
					</div>
				</section>
			</div>
		</div>
		<!-- Top banner end -->
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	</div>
</section>

	<!-- Navigation end -->

	<!-- Selection -->
	<!-- <section class="fh5co-books">
		<div class="site-container">
		<div class="row">
			<div class="column">
			<img src="{{ asset('assets2/images/blog-item-01.png')}}" alt="Snow" style="width:100%">
			</div>
			<div class="column">
			<img src="{{ asset('assets2/images/blog-item-02.png')}}" alt="Forest" style="width:100%">
			</div>
			<div class="column">
			<img src="{{ asset('assets2/images/blog-item-03.png')}}" alt="Mountains" style="width:100%">
			</div>
		</div>
		</div>
	</section>-->


	<!-- Selection end -->

	<section class="fh5co-about-me">
		<div class="about-me-inner site-container">
			<article class="portfolio-wrapper">
				<div class="portfolio__img">
					<img src="{{ asset( 'assets2/images/photo.jpg' )}}" class="about-me__profile" alt="about me profile picture">
				</div>
				<div class="portfolio__bottom">
					<div class="portfolio__name">
						<span>S</span>
						<h2 class="universal-h2">andy Bag</h2>
					</div>
				</div>
			</article>
			<div class="about-me__text">
				<div class="about-me-slider">
					<div class="about-me-single-slide">
						<h2 class="universal-h2 universal-h2-bckg">Check This Out</h2>
						<p><span>H</span> e has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and the British Fantasy Society journal Dark Horizons. He is also CEO of a company, specializing in custom book publishing and social media marketing services, have created a community for authors to learn and connect.He has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and have created a community for authors to learn and connect.</p>
						<div class="books-brand-button mt-3">
							<a href="#" class="brand-button">Check</a>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-me-bckg"></div>
	</section>
	<!-- About me end -->

	<!-- Books and CD -->
	<section class="fh5co-books">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg" style="font-size:35px; color:#c18f59">Latest Update</h2>
			<div class="books">
				@foreach ($items as $item)
				<div class="col-lg-3 col-md- col-sm-12">
				<div class="single-book">
					<a href="{{route('detail.show',$item->item_id)}}" class="single-book__img" >
				 <img src="{{ asset('gambar/'.$item->foto) }}" alt="single book and cd" height="300px">
				 <div class="single-book_download">
					 <span style="font-size:14px; color:#c18f59" alt="book image">{{$item->keterangan}} <p>Klik for Detail</p></span>
				 </div>
			 </a>
			 <h4 class="single-book__title">{{$item->nama}}</h4>
			 <span class="single-book__price">
				 Rp {{number_format($item->harga)}}
			 </span>
			 <!-- star button -->
			 <div class="books-brand-button mt-3 mb-5">
				 <a href="{{url('/cart',$item->item_id)}}" class="brand-button">Pesan</a>
				 <!-- <a href="{{url('/pesan',$item->id)}}" class="brand-button">Pesan</a> -->
			 </div>
		 </div>
	    </div>
		 @endforeach
		</div>
	</div>
	</section>
	<!-- Books and CD end -->

@endsection
