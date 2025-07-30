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
        'category_id',
        'description',
        'price',
        'url_image',
        'stock',
        'is_available',
        'weight',
    ];

    protected $casts = [
        'stock' => 'integer',
        'isAvailable' => 'boolean',
    ];

    protected $guarded = ['id'];

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class, 'product_id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
