<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('product_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->text('content'); 
            $table->string('image')->nullable(); 
            $table->integer('position')->default(0); 
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('product_posts');
    }
};
