@extends('publik/layout/layout')

    @section('title', 'Track')


@section('container')
<style>
    ol.progtrckr {
        margin: 0;
        padding: 0;
        list-style-type none;
    }
    
    ol.progtrckr li {
        display: inline-block;
        text-align: center;
        line-height: 3.5em;
    }
    
    ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
    ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
    ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%; }
    ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
    ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
    ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
    ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
    ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }
    
    ol.progtrckr li.progtrckr-done {
        color: black;
        border-bottom: 4px solid #c18f59;
    }
    ol.progtrckr li.progtrckr-todo {
        color: silver; 
        border-bottom: 4px solid silver;
    }
    
    ol.progtrckr li:after {
        content: "\00a0\00a0";
    }
    ol.progtrckr li:before {
        position: relative;
        bottom: -2.5em;
        float: left;
        left: 50%;
        line-height: 1em;
    }
    ol.progtrckr li.progtrckr-done:before {
        content: "\2713";
        color: white;
        background-color: #c18f59;
        height: 2.2em;
        width: 2.2em;
        line-height: 2.2em;
        border: none;
        border-radius: 2.2em;
    }
    ol.progtrckr li.progtrckr-todo:before {
        content: "\039F";
        color: silver;
        background-color: white;
        font-size: 2.2em;
        bottom: -1.2em;
    }
    .inner_msg{
        clear: both;
        padding: 10px;
        margin: 0 auto;
        width:99%;
        background-color:#efefef;
        border:1px solid #ccc;
        min-height: 150px;
    }
    .inner_msg p{
        color:#000; font-size:15px;
        text-align: center;

    }
    .list option{
        margin-top: 10px
    }
    .inboxMain{
        min-height:400px; background-color:#fff; padding:10px;
        border:1px solid #c18f59;
        width: 100%;
    }
    .inboxRow{
        border-bottom:1px solid #ccc; padding:10px
    }
    .breadcrumbs {float: left;padding: 10px 0px;width: 100%;  margin: 10px 0;}
    .breadcrumbs ul {float: none;margin: 0;padding: 0;position: relative;text-align: left;}
    .breadcrumbs ul li {color: #666;float: left;font-size: 15px;line-height: 1.45em;list-style-type: none;}
    .breadcrumbs ul li span.dot {color: #666;display: inline-block;margin: 0 8px;}
    .breadcrumbs ul li a {color: #666;text-decoration: none;}
    .breadcrumbs ul li a:hover {text-decoration: underline;}

    .box{
    padding: 15px;
    margin-bottom: 20px;
    height: 85px;
    width: 100%;
    border: 1px solid transparent;
    border-radius: 4px;
    background-color: #c18f59;
    text-align: center;
    }
    .wrapperr{ width: 100%; padding: 5px 0px 70px 0 ;}


    </style>
    
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
                <div class="col-md-4"><h3>Order No:  {{$data[0]->order_id}}</h3> </div>
                <div class="col-md-4"><h3>Total: {{$data[0]->subtotal}}</h3> </div>
                <div class="col-md-4"><h3> Status: {{$data[0]->status}}</h3></div>
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
