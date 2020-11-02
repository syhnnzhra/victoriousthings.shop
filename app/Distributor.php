<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    public function IncomingItem()
    {
        return $this->hasMany('App\IncomingItem','item_id','id');
    }
}
