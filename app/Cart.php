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
    public function Transaction()
    {
        return $this->hasMany('App\Transaction','trans_id','id');
    }
}
