<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';


    public function GetAllProduct()
    {
        return $products = Product::all();
    }


    protected $fillable =
    [
        'name',
        'description',
        'price',
        'url_image',
        'wheight',
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
