<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable =
    [
        'name',
        'description',
        'category_id',
        'price',
        'url_image',
        'weight',
        'stock',
        'is_available'
    ];

    protected $casts = [
        'stock' => 'integer',
        'isAvailable' => 'boolean',
    ];

    protected $guarded = ['id'];

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
