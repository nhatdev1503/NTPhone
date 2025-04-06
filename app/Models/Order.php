<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetail;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'order_code',
        'user_id',
        'staff_id',
        'discount_id',
        'total_price',
        'status',
        'cancel_reason',
        'payment_method',
        'payment_status',
        'fullname',
        'address',
        'phone',
        'email',
        'discount_amount'
    ];
    // Quan hệ với bảng OrderItem
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }

    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }
    

    public function discount()
    {
        return $this->belongsTo(Discount::class, 'discount_id');
    }

    public function getTotalRevenueAttribute()
    {
        return self::where('status', 'completed')
            ->sum('total_price');
    }
    public function getTotalOrdersAttribute()
    {
        return self::count();
    }
    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }
}
