<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='Orders';
    protected $primaryKey = 'order_id';
    protected $guarded =[];
    public function Cart()
    {
        return $this->hasMany('App\Cart','cart_id','order_id');
    }
    public function City()
    {
        return $this->belongsTo('App\City','kota','order_id');
    }
    public function Province()
    {
        return $this->belongsTo('App\Province','provinsi','order_id');
    }
}
