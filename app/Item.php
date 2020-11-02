<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function OrderDetail()
    {
        return $this->hasMany('App\OrderDetail','item_id','id');
    }
}