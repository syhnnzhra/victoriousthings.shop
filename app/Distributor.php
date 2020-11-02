<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    public function Incoming_Item()
    {
        return $this->hasMany('App\IncomingItem','item_id','id');
    }
}
