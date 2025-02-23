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
        'original_price',
        'price',
        'stock',
        'image',
        'screen',
        'os',
        'rear_camera',
        'front_camera',
        'cpu',
        'ram',
        'battery',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function colors()
    {
        return $this->hasMany(ProductColor::class);
    }

    public function storage()
    {
        return $this->hasMany(ProductStorage::class);
    }
}

