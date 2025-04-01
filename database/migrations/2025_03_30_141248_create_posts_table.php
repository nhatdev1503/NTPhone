<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('status')->default(1); 
            $table->timestamps();
        });

        Schema::create('post_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            $table->text('content'); 
            $table->string('image'); 
            $table->integer('position')->default(0); 
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('post_images');
        Schema::dropIfExists('posts');
    }
};

