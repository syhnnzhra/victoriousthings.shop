<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function Item()
    {
        return $this->belongsTo('App\Item','item_id','id');
    }
    public function Order()
    {
        return $this->belongsTo('App\Order','order_id','id');
    }
}
