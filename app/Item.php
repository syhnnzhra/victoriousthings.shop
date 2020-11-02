<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function OrderDetail()
    {
        return $this->hasMany('App\OrderDetail','item_id','id');
    }
    public function Categorie()
    {
        return $this->belonngsTo('App\Categorie','nama','kategori');
    }
    public function IncomingItem()
    {
        return $this->hasMany('App\IncomingItem','item_id','id');
    }
}