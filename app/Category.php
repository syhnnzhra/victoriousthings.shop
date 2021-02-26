<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';
    public $incrementing = false;
    // public function Item()
    // {
    //     return $this->hasMany('App\Item','kategori_id','category_id');
    // }
    public function Item()
    {
        return $this->hasMany('App\Item', 'item_id');
    }
}
