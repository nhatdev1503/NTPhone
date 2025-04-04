<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'product_url'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function latestProducts()
    {
        return $this->hasMany(Product::class)->latest()->take(5);
    }
    public function topViewedProducts()
    {
        return $this->hasMany(Product::class) 
                    ->orderBy('views', 'desc') 
                    ->limit(4); 
    }
}

