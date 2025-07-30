<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $primaryKey = 'id';

    /** Attributs remplissables */
    protected $fillable = [
        'quantity',
    ];

    /** Cast automatique des types */
    protected $casts = [
        'quantity' => 'integer',
    ];

    protected $guarded = ['id'];

    /** Relation avec le model Order */
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    /** Relation avec le model Product */
    public function product()
    {
        return $this->hasMany(Product::class, 'product_id');
    }
}