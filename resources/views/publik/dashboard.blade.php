@extends('publik/layout/apps')

    @section('title', 'Welcome to My Knit')

    @section('container')
	<div id="demo" class="carousel slide" data-ride="carousel" style="">
			<!-- Indicators -->
			<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{asset('gambar/banner-1.png')}}" alt="Gambar - 1" width="100" height="75">
				</div>
				<div class="carousel-item">
					<img src="{{asset('gambar/banner-2.png')}}" alt="Gambar - 2" width="100" height="75">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</section>
	<!-- Blog end -->
	<!-- Books and CD -->
	<section class="fh5co-books">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg mt-5">Latest Update</h2>
			<div class="books">
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="{{asset('assets/images/09076fdb830cdc5a2940743255786e84.jpg')}}" alt="single book and cd" height="300px">
						<div class="single-book_download">
							<img src="{{asset('assets2/images/download.svg')}}" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">SweatShirts Rajut Cream</h4>
					<span class="single-book__price">Rp.400000</span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button">Pesan</a>
					</div>
					<!-- star button end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="{{asset('assets/images/27c777790c081384f7751822c26906da.jpg')}}" alt="single book and cd" height="300px">
						<div class="single-book_download">
							<img src="{{asset('assets2/images/download.svg')}}" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Knit Baby Blue</h4>
					<span class="single-book__price">Rp.299000</span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button">Pesan</a>
					</div>
					<!-- star button end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="{{asset('assets/images/a25278eaf9d71e1e2ef4bb2a58ae8218.jpg')}}" alt="single book and cd" height="300px">
						<div class="single-book_download">
							<img src="{{asset('assets2/images/download.svg')}}" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">SweatShirts Light Blue Milk</h4>
					<span class="single-book__price">Rp.269600</span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button">Pesan</a>
					</div>
					<!-- star button end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="{{asset('assets/images/b59188389855c6d087ccfe12e45d03a8.jpg')}}" alt="single book and cd" height="300px">
						<div class="single-book_download">
							<img src="{{asset('assets2/images/download.svg')}}" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">SweatShirts Cream</h4>
					<span class="single-book__price">Rp.350000</span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button">Pesan</a>
					</div>
					<!-- star button end -->
				</div>
			</div>
	</section>
	<!-- Books and CD end -->
            
@endsection