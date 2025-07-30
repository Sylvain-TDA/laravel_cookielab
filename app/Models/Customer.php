<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $table = 'customers';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'postal_code',
        'city',
    ];

    protected $guarded = ['id'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function basket()
    {
        return $this->hasOne(Order::class);
    }
}
