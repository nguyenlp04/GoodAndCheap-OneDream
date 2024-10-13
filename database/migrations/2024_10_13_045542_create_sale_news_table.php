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
        Schema::create('sale_news', function (Blueprint $table) {
            $table->id('sale_new_id');
            $table->foreignId('user_id')->constrained('users','user_id');
            $table->foreignId('sub_category_id')->constrained('sub_categories');
            $table->text('title')->nullable();
            $table->decimal('price',10,0)->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_news');
    }
};
