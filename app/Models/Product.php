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
        'urlPic',
        'wheight',
        'stock',
        'isAvalaible'
    ];

    protected $casts = [
        'stock' => 'integer',
        'isAvailable' => 'boolean',
    ];

    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasMany(OrderItems::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
