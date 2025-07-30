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
        'price',
        'url_image',
        'weight',
        'stock',
        'is_active',
        'is_available',
        'category_id' // Clé étrangère vers la table des catégories
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'weight' => 'decimal:2',
        'stock' => 'integer',
        'is_active' => 'boolean',
        'is_available' => 'boolean',
    ];

    protected $guarded = ['id'];


    /**===== RELATIONS =====*/
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    /**===== SCOPES =====*/
    // Produits actifs (visibles)
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Produits disponibles (en vente)
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    // Produits vendables (les deux conditions)
    public function scopeSellable($query)
    {
        return $query->active()->available();
    }


    /**===== Accesseurs et méthodes =====*/
    // Produits achetables (en stock)
    public function canBePurchased($query)
    {
        return $query->sellable() && $query->stock > 0;
    }

    // Message d'indisponibilité
    public function getAvailabilityMessageAttribute()
    {
        if (!$this->is_active) {
            return 'Ce produit n\'est plus vendu actuellement.';
        }
        if (!$this->is_available) {
            return 'Ce produit est temporairement indisponible.';
        }
        if ($this->stock <= 0) {
            return 'Rupture de stock.';
        }
        if ($this->stock < 5) {
            return 'Plus que {$this->stock} exemplaires en stock!';
        }
        return 'En stock.';
    }
}