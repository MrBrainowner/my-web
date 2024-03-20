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
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('comment_id');
            $table->unsignedBigInteger('post_id'); //fk
            $table->unsignedBigInteger('user_id'); //fk
            $table->text('comment_content');
            $table->timestamps();
            //fk
            $table->foreign('post_id')->references('post_id')->on('post')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
        Schema::create('comment_likes', function (Blueprint $table) {
            $table->bigIncrements('comment_like_id');
            $table->unsignedBigInteger('comment_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        
            $table->foreign('comment_id')->references('comment_id')->on('comments')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->unique(['comment_id', 'user_id']); // Ensure a user can only like a comment once
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
