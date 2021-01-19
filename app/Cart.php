<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table='carts';
    protected $guarded =[];
    public function Item()
    {
        return $this->hasMany(Item::class);
    }
}
