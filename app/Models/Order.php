<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $primaryKey = "id";

    protected $fillable = [
        'total_amount',
    ];

    protected $guarded = ['id'];

    public $timestamps = true;

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

     public function discountCodes() {
        return $this->belongsTo(DiscountCode::class);
    }
     public function delivery() {
        return $this->belongsTo(Delivery::class);
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }
}
