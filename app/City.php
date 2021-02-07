<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function Province()
    {
        return $this->belongsTo('App\Province','province_id','id');
    }
    public function User()
    {
        return $this->hasMany('App\User','user_id','id');
    }
}
