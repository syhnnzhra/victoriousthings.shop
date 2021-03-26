@extends('publik/layout/layout')

    @section('title', 'Second Things - Sell')


    @section('container')
       <!-- Container -->
       <section class="fh5co-books" style="font-family: 'Calisto-MT';">
           <div class="site-container">
		   <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size:35px ;color: #c18f59;'>Sell</h2>

            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('sell.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <input type="hidden" name="{{Auth::user()->id}}" id="">
                            <input type="hidden" name="{{Auth::user()->id}}" id="">
                            <div class="col-sm-6 mt-3">
                                <label for="">Item's Name</label>
                                <input type="text" class="form-control" name="item" placeholder="Item's Name">
                            </div>
                            <div class="col-sm-6 mt-3" id="only-number">
                                <label for="">Quantity</label>
                                <input type="number" class="form-control" name="jumlah" placeholder="Quantity"  id="number">
                            </div>
                            <div class="col-sm-6 mt-3"  id="only-number">
                                <label for="">Price</label>
                                <input type="number"  id="number" class="form-control" name="harga" placeholder="Price">
                            </div>
                            <div class="col-sm-6 mt-3"  id="only-number">
                                <label for="">Subtotal</label>
                                <input type="number"  id="number" class="form-control" name="subtotal" placeholder="Subtotal">
                            </div>
                            <div class="col-sm-6 mt-3" id="only-number">
                                <label for="">Go-pay Number</label>
                                <input type="text" id="number" class="form-control" placeholder="Go-pay Number" name="gopay" required maxlength="13" minlength="12">
                            </div>
                            <div class="col-sm-6 mt-3">
                                <label for="">Picture</label>
                                <input class="form-control" type="file" name="foto" id="formFile">
                                <small>*1 pictures</small>
                            </div>
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2 mt-3 text-right"> 
                                <button class="brand-button">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </section>
	<!-- Container end -->
    <script>
        $(function() {
        $('#only-number').on('keydown', '#number', function(e){
            -1!==$
            .inArray(e.keyCode,[46,8,9,27,13,110,190]) || /65|67|86|88/
            .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey)
            || 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey|| 48 > e.keyCode || 57 < e.keyCode)
            && (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
        });
        })
    </script>
    @endsection