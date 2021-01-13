@extends('publik/layout/apps')

    @section('title', 'Cart')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books">
           <div class="site-container">
               <h2 class="universal-h2 universal-h2-bckg mt-5">All Items</h2>
               @if(empty($cart) || count($cart)==0)
                    Tidak ada produk!
               @else
               @endif
		    </div>
        </section>
	<!-- Container end -->

    @endsection