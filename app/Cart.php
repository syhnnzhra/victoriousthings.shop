<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table='carts';
    protected $guarded =[];
    public function Item()
    {
        return $this->belongsTo('App\Item','item_id','id');
    }
    public function Order()
    {
        return $this->hasMany('App\Order','order_id','id');
    }
}
