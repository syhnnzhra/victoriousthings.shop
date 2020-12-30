@extends('publik/layout/apps')

    @section('title', 'Cardigan')

    @section('container')
	<!-- container-->
	<section class="fh5co-books">
		<div class="site-container mt-5">
            <div class="kategori">
            <a href="aksesoris" class="universal-h2 mt-5 mr-3 " style="font-size: 20px">Accessories</h2></a>
            <a href="sweater" class="universal-h2 mt-5 mr-3 " style="font-size: 20px">Sweater</h2></a>
            <a href="shirt" class="universal-h2 mt-5 mr-3 " style="font-size: 20px">Shirt</h2></a>
            <a href="cardigan"  class="universal-h2 mt-5 mr-3 " style="font-size: 20px">Cardigan</h2></a>
            </div>
			<div class="books">
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="{{asset('assets2/images/books-1.jpg')}}" alt="single book and cd">
						<div class="single-book_download">
							<img src="{{asset('assets2/images/download.svg')}}" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Olivani</h4>
					<span class="single-book__price">$15.00</span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button">Check Out</a>
					</div>
					<!-- star button end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="{{asset('assets2/images/books-2.jpg')}}" alt="single book and cd">
						<div class="single-book_download">
							<img src="{{asset('assets2/images/download.svg')}}" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Molleon’s Life</h4>
					<span class="single-book__price">$22.00</span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button">Check Out</a>
					</div>
					<!-- star button end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="{{asset('assets2/images/books-3.jpg')}}" alt="single book and cd">
						<div class="single-book_download">
							<img src="{{asset('assets2/images/download.svg')}}" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Love is Love</h4>
					<span class="single-book__price">$25.00</span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button">Check Out</a>
					</div>
					<!-- star button end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="{{asset('assets2/images/books-4.jpg')}}" alt="single book and cd">
						<div class="single-book_download">
							<img src="{{asset('assets2/images/download.svg')}}" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Give Me Also</h4>
					<span class="single-book__price">$30.00</span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button">Check Out</a>
					</div>
					<!-- star button end -->
				</div>
			</div>
	</section>
	<!-- endcontainer  -->
        
            
@endsection