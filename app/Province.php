<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function City()
    {
        return $this->hasMany('App\City','province_id','id');
    }
    public function User()
    {
        return $this->hasMany('App\User','user_id','id');
    }
}
