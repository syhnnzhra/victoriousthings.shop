<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='Orders';
    protected $primaryKey = 'order_id';
    protected $guarded =[];
    public function Cart()
    {
        return $this->hasMany('App\Cart','cart_id','order_id');
    }
    public function City()
    {
        return $this->belongsTo('App\City','kota');
    }
    public function Province()
    {
        return $this->belongsTo('App\Province','provinsi');
    }
    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public const CREATED = 'created';
	public const CONFIRMED = 'confirmed';
	public const DELIVERED = 'delivered';
	public const COMPLETED = 'completed';
	public const CANCELLED = 'cancelled';

	public const ORDERCODE = 'INV';

	public const PAID = 'paid';
	public const UNPAID = 'unpaid';

	public const STATUSES = [
		self::CREATED => 'Created',
		self::CONFIRMED => 'Confirmed',
		self::DELIVERED => 'Delivered',
		self::COMPLETED => 'Completed',
		self::CANCELLED => 'Cancelled',
	];

    public function isPaid()
	{
		return $this->payment_status == self::PAID;
	}

}
