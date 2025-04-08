<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_variant_id')->constrained()->onDelete('cascade');
            $table->string('color')->nullable();
            $table->string('storage')->nullable();
            $table->tinyInteger('rating')->unsigned(); 
            $table->text('review')->nullable(); 
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('ratings');
    }
};

