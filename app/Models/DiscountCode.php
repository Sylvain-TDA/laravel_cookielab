<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountCodes extends Model
{
    protected $table = 'discount_codes';

    protected $primaryKey = 'id';

    /** Attributs remplissables */
    protected $fillable = [
        'code',
        'discount_percentage',
        'discount_fix',
        'valid_from',
        'valid_until',
        'is_active',
    ];

    /** Cast automatique des types*/
    protected $casts = [
        'valid_from' => 'datetime',
        'valid_until' => 'datetime',
        'is_active' => 'boolean',
    ];

    protected $guarded = ['id'];

    /** Relation avec le model Order */
    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function isValid()
    {
        $now = now();
        return $this->is_active && $this->valid_from <= $now && $this->valid_until >= $now;
    }
}
