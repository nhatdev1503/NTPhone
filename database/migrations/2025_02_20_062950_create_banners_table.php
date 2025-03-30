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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('product_url');
            $table->enum('status', ['active', 'inactive'])->default('inactive'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banners');
    }

};
