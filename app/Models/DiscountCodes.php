<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountCodes extends Model
{
    protected $table = 'discount_codes';

    protected $primaryKey = 'id';

    protected $fillable = [
        'code',
        'discount_percentage',
        'discount_fixed',
        'valid_from',
        'valid_until',
        'is_active',
    ];

    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
    /**public function isValid()
    {
        $now = now();
        return $this->is_active && $this->valid_from <= $now && $this->valid_until >= $now;
    } */
}
