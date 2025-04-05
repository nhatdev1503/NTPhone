<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $table = 'discounts';

    protected $fillable = [
        'code',
        'discount_type',
        'discount_value',
        'max_discount_value',
        'min_order_value',
        'start_date',
        'expiration_date',
    ];

    protected $casts = [
        'discount_type' => 'string',
        'discount_value' => 'decimal:2',
        'max_discount_value' => 'integer',
        'min_order_value' => 'integer',
        'start_date' => 'date',
        'expiration_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}