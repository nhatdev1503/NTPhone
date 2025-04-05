<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id'); // Liên kết với bảng orders
            $table->string('payment_method'); // Phương thức thanh toán (VNPay, MoMo, tiền mặt,...)
            $table->string('payment_status')->default('pending'); // Trạng thái thanh toán
            $table->string('transaction_id')->nullable(); // Mã giao dịch (nếu có)
            $table->decimal('amount', 10, 2); // Số tiền thanh toán
            $table->timestamps();

            // Khóa ngoại
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
    