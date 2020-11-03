<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table='Order_Details';
    public function Order()
    {
        return $this->belongsTo('App\Order','order_id','id');
    }
}
