<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\OrderItem;
use App\Models\ProductVariant;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Rating;
use App\Models\Comment;

class Product extends Model
{
    use HasFactory, SoftDeletes;

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
   // Trong Product.php
public function ratings()
{
    return $this->hasManyThrough(
        Rating::class,
        ProductVariant::class,
        'product_id',            
        'product_variant_id',    
        'id',                    
        'id'                     
    );
}

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
        return self::where('status', 'active')->count();
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

