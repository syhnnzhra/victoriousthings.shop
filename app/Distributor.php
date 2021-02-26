<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $primaryKey = 'distributor_id';
    public function Incoming_Item()
    {
        return $this->hasMany('App\Incoming_Item','item_id','distributor_id');
    }
}
