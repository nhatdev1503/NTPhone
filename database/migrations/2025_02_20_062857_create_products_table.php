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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('mini_image')->nullable();
            $table->string('screen')->nullable();
            $table->string('os')->nullable();
            $table->string('rear_camera')->nullable();
            $table->string('front_camera')->nullable();
            $table->string('cpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('battery')->nullable();
            $table->decimal('base_price', 15, 2);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }

};
