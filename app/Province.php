<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function City()
    {
        return $this->hasMany('App\City','province_id','id');
    }
}
