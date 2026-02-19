<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'id',
        'order_number',
        'customer_name',
        'phone',

    ];

    public function items()
    {
        return $this->belongsTo(Item::class, 'order_id');
    }
}
