@extends('publik/layout/apps')

    @section('title', 'Welcome to My Knit')

    @section('container')
    <section class="fh5co-blog">
		<div class="site-container mt-5">
			<h2 class="universal-h2 universal-h2-bckg mt-5">Welcome</h2>
			<div class="blog-slider blog-inner">
				<div class="single-blog">
					<div class="about-me-slider">
						<div >
							<img src="{{asset('assets/images/blog-item-01.png')}}" height="250px" width="500px" >
						</div>
			</div>
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