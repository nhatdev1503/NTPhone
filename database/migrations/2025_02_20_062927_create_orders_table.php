<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code')->unique();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('staff_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('discount_id')->nullable()->constrained('discounts')->onDelete('set null');
            $table->string('fullname'); 
            $table->string('address');  
            $table->string('phone');    
            $table->string('email');    
            $table->integer('total_price');
            $table->integer('discount_amount')->default(0);
            $table->enum('status', ['pending', 'processing', 'shipped', 'delivered','completed', 'cancelled'])->default('pending');
            $table->enum('payment_method', ['COD', 'VNPay']);
            $table->enum('payment_status', ['pending', 'paid', 'failed'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }

};
