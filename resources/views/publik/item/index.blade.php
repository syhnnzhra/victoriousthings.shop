@extends('publik/layout/apps')

    @section('title', 'All Items')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books">
           <div class="site-container">
               <h2 class="universal-h2 universal-h2-bckg mt-5" style='color: #c18f59;'>All Items</h2>
               
               <!-- <div class="row"> -->
               <div class="">
                <div class="input-group icons demo-2 mb-5">
                    <div class="form col-5">
                        <form action="searchpublikitem" method="get">
                        {{csrf_field()}}
                            <input type="search" name="searchp" class="form-control" placeholder="Search here!">
                            <!-- <label class="form-label" for="form1">Search</label> -->
                    </div>
                            <button type="submit" class="brand-button">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                </div>
                        
               </div>
                   <div class="books">
                       @foreach ($items as $item)
                       <div class="col-lg-3 col-md- col-sm-12">
                       <div class="single-book">
                           <a href="{{route('detail.show',$item->id)}}" class="single-book__img" >
						<img src="{{ asset('gambar/'.$item->foto) }}" alt="single book and cd" height="300px" >
						<div class="single-book_download">
							<span style="font-size:14px; color:#c18f59" alt="book image">{{$item->keterangan}} <p>Klik for Detail</p></span>
						</div>
					</a>
                    <h4 class="single-book__title">{{$item->nama}}</h4>
					<span class="single-book__price">
                        Rp {{number_format($item->harga)}}
                    </span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="{{url('/cart',$item->id)}}" class="brand-button">Pesan</a>
						<!-- <a href="{{url('/pesan',$item->id)}}" class="brand-button">Pesan</a> -->
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