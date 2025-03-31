<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('branch');            
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('phone');
            $table->string('facebook');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('contacts');
    }
};
