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
        Schema::create('my_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->indexed()->nullable();
            $table->string('slug',150);
            $table->string('title',100);
            $table->string('subtitle',200);
            $table->text('content');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_posts');
    }
};
