<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table='carts';
    protected $primaryKey = 'cart_id';
    protected $guarded =[];
    public function Item()
    {
        return $this->belongsTo('App\Item','item_id');
    }
    public function Detail()
    {
        return $this->belongsTo('App\Order','detail_id','cart_id');
    }
}
