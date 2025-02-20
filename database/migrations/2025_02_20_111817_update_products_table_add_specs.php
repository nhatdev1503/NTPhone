<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('products', function (Blueprint $table) {
            $table->string('screen')->nullable()->after('image');
            $table->string('os')->nullable()->after('screen');
            $table->string('rear_camera')->nullable()->after('os');
            $table->string('front_camera')->nullable()->after('rear_camera');
            $table->string('cpu')->nullable()->after('front_camera');
            $table->string('ram')->nullable()->after('cpu');
            $table->string('battery')->nullable()->after('ram');
        });
    }

    public function down() {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['screen', 'os', 'rear_camera', 'front_camera', 'cpu', 'ram', 'battery']);
        });
    }
};


