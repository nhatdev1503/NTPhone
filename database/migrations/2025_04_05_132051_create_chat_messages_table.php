<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_id'); // ID của người gửi
            $table->unsignedBigInteger('receiver_id'); // ID của người nhận
            $table->unsignedBigInteger('room_id'); // ID của phòng chat, không liên kết với bảng nào
            $table->text('message')->nullable(); // Nội dung tin nhắn (văn bản)
            $table->string('media_type')->nullable(); // Loại file đính kèm (image, video, etc.)
            $table->string('media_path')->nullable(); // Đường dẫn đến file đính kèm
            $table->timestamp('read_at')->nullable(); // Thời điểm tin nhắn được đọc
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_messages');
    }
};
