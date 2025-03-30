<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->tinyInteger('rating')->unsigned(); 
            $table->text('review')->nullable(); 
            $table->timestamps();

            $table->unique(['user_id', 'product_id']);
        });
    }

    public function down() {
        Schema::dropIfExists('ratings');
    }
};

