<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $primaryKey = 'id';
    public function users() {
        return $this->hasOne('User');
        return $this->belongsTo('User');
    }

    public function City()
    {
        return $this->belongsTo('App\City','city_id');
    }
    public function Province()
    {
        return $this->belongsTo('App\Province','province_id');
    }
    public function Order()
    {
        return $this->belongsTo('App\Order','order_id');
    }
    public function Incoming_Item()
    {
        return $this->belongsTo('App\Incoming_Item', 'incoming_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
