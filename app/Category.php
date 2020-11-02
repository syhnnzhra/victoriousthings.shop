<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Item()
    {
        return $this->hasMany('App\Item','nama','kategori');
    }
}
