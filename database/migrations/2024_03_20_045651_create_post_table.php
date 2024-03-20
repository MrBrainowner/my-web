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
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('post_id');
            $table->unsignedBigInteger('user_id'); //fk
            $table->text('post_content');
            $table->timestamps();
            //fk
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::create('post_likes', function (Blueprint $table) {
            $table->bigIncrements('likes_id');
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            //fk
            $table->foreign('post_id')->references('id')->on('post')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unique(['post_id', 'user_id']); // Ensure a user can only like a post once
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
