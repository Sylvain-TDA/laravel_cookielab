<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected$table = "deliveries";

    protected $primaryKey = "id";

    protected $fillable = [
        'name','cost'
    ];

    protected $guarder = ['id'];
}
