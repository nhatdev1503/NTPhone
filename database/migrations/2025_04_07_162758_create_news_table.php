<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    public function up()
{
    Schema::create('news', function (Blueprint $table) {
        $table->id(); 
        $table->string('title');  
        $table->text('content');  
        $table->string('thumbnail_path')->nullable(); // ✅ Thêm dòng này
        $table->boolean('is_active')->default(true); 
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); 
        $table->timestamp('published_at')->nullable();
        $table->timestamps();  
    });
}

    public function down()
    {
        Schema::dropIfExists('news');
    }
}
