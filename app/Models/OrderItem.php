<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_variant_id',
        'name',
        'image',
        'color',
        'storage',
        'quantity',
        'rating',
        'review',
        'price'
    ];

    // Quan hệ với bảng Order
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }


    // Quan hệ với bảng ProductVariant (chính là sản phẩm có biến thể)
    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class, 'product_variant_id');
    }
}
