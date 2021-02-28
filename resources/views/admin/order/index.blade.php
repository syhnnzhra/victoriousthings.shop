@extends('layoutAdmin/layout')

      @section('title', 'Order/pesanan ')

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
                                <h3 class="mt-4"> Tabel Order </h3>
                                    <div class="table mt-5">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>User</th>
                                                    <th>Item</th>
                                                    <th>SubTotal</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $countOrder =1;?>
                                            @foreach($order as $order)
                                                <tr>
                                                    <td>{{$order->order_id}}</td>
                                                    <td>{{$order->user->name}}</td>
                                                    <td> <span class="badge badge-success">{{ $sum }} Item</span> </td>
                                                    <td>Rp {{number_format($order->subtotal)}}</td>
                                                    <td>
                                                        <input type="hidden" id="order_id<?php echo $countOrder;?>" value="{{$order->id}}"/>
                                                        <select class="form-control" id="order_status<?php echo $countOrder;?>">
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
                                                        <a href="{{route('order.show',$order->order_id)}}" class="btn btn-outline-warning">Show</a> 
                                                        
                                                    </td>
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