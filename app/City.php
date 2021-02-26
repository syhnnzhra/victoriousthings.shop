<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $primaryKey = 'city_id';
    public function Province()
    {
        return $this->belongsTo('App\Province','province_id');
    }
    public function User()
    {
        return $this->hasMany('App\User','user_id');
    }
    public function Detail()
    {
        return $this->hasMany('App\Order','order_id','city_id');
    }
}
