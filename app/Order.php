<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','status','note','subtotal'];
    public function Customer()
    {
        return $this->belongsTo('App\Customer','customer_id','id');
    }
    public function Order_Detail()
    {
        return $this->hasMany('App\Order_Detail','order_id','id');
    }
    public function Item()
    {
        return $this->belongsTo('App\Item','item_id','id');
    }
    public function Cart()
    {
        return $this->belongsTo('App\Cart','cart_id','id');
    }
    public function User()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
