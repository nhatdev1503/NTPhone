<?php
 namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 
 class Payment extends Model
 {
     use HasFactory;
 
     protected $fillable = [
         'order_id', // Đảm bảo có cột này trong DB
         'payment_method',
         'payment_status',
         'transaction_id',
         'amount',
     ];
 
     // Payment thuộc về Order
     public function order()
     {
         return $this->belongsTo(Order::class, 'order_id', 'id');
     }
 }
 

?>