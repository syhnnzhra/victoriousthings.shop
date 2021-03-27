@extends('publik/layout/layout')

    @section('title', 'Second Things - All Items')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books">
           <div class="site-container">
               <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size: 35px ; color: #c18f59;'>All Items</h2>
               
               <!-- <div class="row"> -->
               <div class="">
                    <div class="input-group icons demo-2 mb-5">
                    <div class="demo-2 search mr-auto ml-3">
                        <form action="searchpublikitem" method="get">
                            {{csrf_field()}}
                            <span class="icon"><i class="fa fa-search" style='font-size:25px ;color: #c18f59;'></i></span>
                            <input type="search" name="searchp" id="search" placeholder=" Search here!"/>
                        </form>
                    </div>
                    </div>
                   </div>
       
      
                   <div class="books">
                       @foreach ($items as $item)
                       <div class="col-lg-3 col-md- col-sm-12">
                       <div class="single-book">
                           <a href="{{url('/cart',$item->item_id)}}" class="single-book__img" >
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
                    </div>
                </div>
            </div>
                @endforeach
                     </div>
                </div>
		    </div>
        </section>
	<!-- Container end -->

    @endsection