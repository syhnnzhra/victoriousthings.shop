@extends('layoutAdmin/layout')

      @section('title', 'Second Things - Order')

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
          <section id="main-content">
            <section class="wrapper">
            <div class="row mt-4">
              <div class="col-lg-12">
                        <div class="content-panel">
                            <div class="content ml-4">
                                <h3 class="mt-4"> Order </h3>
                                    <div class="input-group mt-5 col-sm-4">
                                        <!-- <div class="input-group-text"> <i class="fa fa-search"></i> </div> -->
                                        <form action="/searchorder" method="get">
                                            @csrf
                                            <input type="search" name="searchp" class="form-control" id="search" placeholder="Search here!">
                                        </form>
                                    </div>
                                    <div class="table table-responsive mt-5">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>User</th>
                                                    <th>Message</th>
                                                    <th>Total</th>
                                                    <th>Payment Status</th>
                                                    <th>No Resi</th>
                                                    <th>Track Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $countOrder =1;?>
                                            @foreach($order as $order)
                                                <tr>
                                                    <td>{{$order->order_id}}</td>
                                                    <td>{{$order->user_id}}</td>
                                                    <td>{{$order->bank}}</td>
                                                    <td>Rp {{number_format($order->subtotal)}}</td>
                                                    <!-- <td> <span class="badge badge-success"> Item</span> </td> -->
                                                    <td>{{$order->payment_status}}</td>
                                                    <form action="{{route('order.update', $order->order_id)}}" method="post">
                                                    @method('PUT')
                                                    @csrf
                                                    <td><input type="text" required class="form-control" value="{{$order->no_resi}}" name="no_resi" maxlenght="14"></td>
                                                    <td>
                                                        <input type="hidden" id="order_id<?php echo $countOrder;?>" value="{{$order->order_id}}"/>
                                                        <select required name="status" class="form-control" id="order_status<?php echo $countOrder;?>">
                                                            <option value="pending"
                                                            <?php if($order->status=='pending'){?> selected="selected"<?php }?>>pending</option>
        
                                                            <option value="dispatched"
                                                                <?php if($order->status=='dispatched'){?> selected="selected"<?php }?>>dispatched</option>
        
                                                            <option value="processed"
                                                            <?php if($order->status=='processed'){?> selected="selected"<?php }?>>processed</option>
        
                                                            <option value="shipping"
                                                            <?php if($order->status=='shipping'){?> selected="selected"<?php }?>>shipping</option>
        
                                                            <option value="cancelled"
                                                            <?php if($order->status=='cancelled'){?> selected="selected"<?php }?>>cancelled</option>
        
                                                            <option value="delivered"
                                                            <?php if($order->status=='delivered'){?> selected="selected"<?php }?>>delivered</option>
                                                        </select>
                                                        <div align="center" id="successMsg<?php echo $countOrder;?>"></div>
                                                        </div>
                                                    <?php $countOrder++;?>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-outline-warning"><i class="fa fa-edit"></i></button>
                                                        <a href="{{route('order.show',$order->order_id)}}" class="btn btn-outline-warning">Show</a> 
                                                    </td>
                                                    </form>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                    </div><!-- /content-panel -->
                 </div><!-- /col-lg-4 -->			
          </div><!-- /row -->


@endsection