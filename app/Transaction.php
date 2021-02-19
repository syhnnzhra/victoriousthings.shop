<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function cart() {
        return $this->belongsTo('App\Cart', 'cart_id','id');
    }

    public function item() {
        return $this->belongsTo('App\Item', 'item_id','id');
    }
}
