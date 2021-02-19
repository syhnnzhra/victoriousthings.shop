<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table='Order_Details';
    protected $guarded =[];
    public function Cart()
    {
        return $this->belongsTo('App\Cart','cart_id','id');
    }
}
