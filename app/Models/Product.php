<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image',
        'screen',
        'os',
        'rear_camera',
        'front_camera',
        'cpu',
        'ram',
        'battery',
        'view',
        'sold',
        'priority',
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
    
}

