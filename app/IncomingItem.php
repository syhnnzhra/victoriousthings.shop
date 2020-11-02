<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomingItem extends Model
{
    public function Item()
    {
        return $this->belongsTo('App\Item','item_id','id');
    }
    
    public function Distributor()
    {
        return $this->belongsTo('App\Distributor','distributor_id','id');
    }
    
    
}
