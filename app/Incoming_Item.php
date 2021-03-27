<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incoming_Item extends Model
{
    protected $table='incoming_items';
    protected $primaryKey = 'incoming_id';
    public function Item()
    {
        return $this->belongsTo('App\Item','item_id','incoming_id');
    }
    
    public function Distributor()
    {
        return $this->belongsTo('App\Distributor','distributor_id');
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
