<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDiscount extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'discount_id',
        'discount_amount'
    ];
}

