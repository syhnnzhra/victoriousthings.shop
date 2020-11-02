<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function Order()
    {
        return $this->hasMany('App\Order','customer_id','id');
    }
}
