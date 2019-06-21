<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

	protected $fillable = ['precio', 'cantidad', 'idproducto', 'order_id'];

	public $timestamps = false;

	public function order()
	{
	    return $this->belongsTo('App\Order');
	}

	public function product()
    {
        return $this->belongsTo('App\Producto');
    }
}
