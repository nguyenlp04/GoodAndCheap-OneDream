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
        Schema::create('conversation', function (Blueprint $table) {
            $table->id('conversation_id');
            $table->unsignedBigInteger('sender_id'); // ID của người gửi
            $table->unsignedBigInteger('receiver_id'); // ID của người nhận
            $table->enum('sender_type',['user','staff']); // 'staff' hoặc 'user'
            $table->string('receiver_type',['user','staff']); // 'staff' hoặc 'user'
            $table->timestamp('created_at');
            $table->foreign('sender_id')->references('staff_id')->on('staffs')->onDelete('cascade');
            $table->foreign('sender_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('receiver_id')->references('staff_id')->on('staffs')->onDelete('cascade');
            $table->foreign('receiver_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversation');
    }
};
