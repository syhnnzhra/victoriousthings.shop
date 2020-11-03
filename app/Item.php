<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function Order()
    {
        return $this->hasMany('App\Order','item_id','id');
    }
    public function Category()
    {
        return $this->belonngsTo('App\Categorie','nama','kategori');
    }
    public function Incoming_Item()
    {
        return $this->hasMany('App\Incoming_Item','item_id','id');
    }
}