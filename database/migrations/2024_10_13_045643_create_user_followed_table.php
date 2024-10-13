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
        Schema::create('user_followed', function (Blueprint $table) {
            $table->id('user_followed_id');
            $table->foreignid('user_id')->constrained('users','user_id');
            $table->foreignid('channel_id')->constrained('channels','channel_id');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_followed');
    }
};
