<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'discount_type',
        'max_discount_value',
        'discount_value',
        'min_order_value',
        'start_date',
        'expiration_date'
    ];
}

