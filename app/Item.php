<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function Order_Detail()
    {
        return $this->hasMany('App\OrderDetail','item_id','id');
    }
    public function Category()
    {
        return $this->belonngsTo('App\Categorie','nama','kategori');
    }
    public function Incoming_Item()
    {
        return $this->hasMany('App\IncomingItem','item_id','id');
    }
}