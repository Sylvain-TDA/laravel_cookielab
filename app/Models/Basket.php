<?php

namespace App\Models;

use Database\Seeders\OrderSeeder;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $table = 'basket';

    protected $primaryKey = "id";

    protected $fillable = [
        'customer_id',
        'order_items_id',
        'sum',
    ];

    protected $guarded = ['id'];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

      public function orderItem()
    {
        return $this->hasOne(OrderItem::class);
    }
}
