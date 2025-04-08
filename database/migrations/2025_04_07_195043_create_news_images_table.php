<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsImagesTable extends Migration
{
    public function up()
    {
        Schema::create('news_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->constrained('news')->onDelete('cascade'); 
            $table->string('image_path'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news_images');
    }
}
