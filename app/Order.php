<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function Customer()
    {
        return $this->belongsTo('App\Customer','customer_id','id');
    }
    public function OrderDetail()
    {
        return $this->hasMany('App\OrderDetail','order_id','id');
    }
}