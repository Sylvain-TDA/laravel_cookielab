<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $table = 'order_items';
    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'quantity',
    ];
    /** public function order()
    *{
    *    return $this->belongsTo(Order::class);
    *}
    *public function product()
    *{
    *    return $this->belongsTo(Product::class);
   * } */
}