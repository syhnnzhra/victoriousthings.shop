@extends('publik/layout/layout')

    @section('title', 'Second Things - Track')


@section('container')
<script>
    $(document).ready(function(){
    <?php for($i=1;$i<15;$i++){?>
    $('#order_status<?php echo $i;?>').change(function(){
    var order_id<?php echo $i;?> = $('#order_id<?php echo $i;?>').val();
    var order_status<?php echo $i;?> = $('#order_status<?php echo $i;?>').val();

        $.ajax({
        type: 'get',
        data: 'order_id=' + order_id<?php echo $i;?> + '&order_status=' + order_status<?php echo $i;?>,
        url: '<?php echo url('/Admin/OrderController/orderStatusUpdate');?>',
        success: function(response){
            console.log(response);
            $('#successMsg<?php echo $i;?>').html(response);
            
        }
        });
    });
    <?php }?>
    });
    </script>

    <section class="fh5co-books">
        <div class="site-container">
            <div class="wrapperr">
                        <div class="col-sm-12">
                        <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{url('/homepublik')}}">Home </a></li>
                        <li><span class="dot">/</span>
                            <a href="/prof"> {{Auth::user()->name}}</a></li>
                        <li><span class="dot">/</span>
                        <a href="">Track Order</a>
                            </ul>
                        </div>
                        </div>
            </div>
            <div class="inboxMain" >
                <div class="box" style="color:#efefef">
                <i class="textrack">Order No:  {{$data[0]->order_id}} </i>
                <i class="textrack">Total: Rp.{{number_format($data[0]->subtotal)}} </i>
                <i class="textrack"> Status: {{$data[0]->status}}</i>
                <i class="textrack"> No Resi: {{$data[0]->no_resi}}</i>
                </div>

            @if($data[0]->status=="pending")
                @include('publik.profile.steps.pending')

                @elseif($data[0]->status=="dispatched")
                    @include('publik.profile.steps.dispatched')


                    @elseif($data[0]->status=="processed")
                    @include('publik.profile.steps.processed')
                    

                    @elseif($data[0]->status=="shipped")
                    @include('publik.profile.steps.shipped')
                    
                    @elseif($data[0]->status=="delivered")
                    @include('publik.profile.steps.delivered')

                    @elseif($data[0]->status=="cancelled")

                <h1 align="center">your order cancelled by admin</h1>

                @endif
                </div>
                
        </div>
    </section>
    
    @endsection
