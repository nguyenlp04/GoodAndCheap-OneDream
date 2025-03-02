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
        Schema::create('messages', function (Blueprint $table) {
            $table->id('message_id');
            $table->foreignId('conversation_id')->constrained('conversation','conversation_id');
            $table->unsignedBigInteger('sender_id');
            $table->text('content');
            $table->timestamp('created_at');
            $table->enum('sender_type',['user','staff']);
            $table->foreign('sender_id')->references('staff_id')->on('staffs')->onDelete('cascade');
            $table->foreign('sender_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
