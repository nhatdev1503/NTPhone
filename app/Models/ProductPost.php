<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPost extends Model {
    use HasFactory;

    protected $fillable = ['product_id', 'content', 'image', 'position'];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}

