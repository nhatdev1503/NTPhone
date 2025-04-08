<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;


protected $fillable = ['title', 'content', 'is_active', 'user_id', 'published_at'];


    // Mối quan hệ với bảng news_images
    public function images()
    {
        return $this->hasMany(NewsImage::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class); 
    }
    public function firstImage()
{
    return $this->hasOne(NewsImage::class)->latest(); 
}
}
