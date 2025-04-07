<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;
use App\Models\ProductVariant;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Rating;
use App\Models\Comment;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image',
        'base_price',
        'sale_price',
        'view',
        'sold',
        'priority',
        'have_variant',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
    public function one_variant()
    {
        return $this->hasOne(ProductVariant::class);
    }
    public function colors()
    {
        return $this->hasMany(ProductVariant::class, 'product_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function getTotalProductsAttribute()
    {
        return self::count();
    }
    public function posts() {
        return $this->hasMany(ProductPost::class)->orderBy('position');
    }

    /**
     * Lấy danh sách các mục đơn hàng liên quan đến sản phẩm này
     * thông qua các biến thể sản phẩm.
     */
    public function orderItems()
    {
        return $this->hasManyThrough(OrderItem::class, ProductVariant::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

