<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $primaryKey = 'province_id';
    protected $guarded=[];
    public function City()
    {
        return $this->hasMany('App\City','province_id');
    }
    public function User()
    {
        return $this->hasMany('App\User','user_id');
    }
    public function Order()
    {
        return $this->hasMany('App\Order','order_id');
    }
}