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
        // Schema::dropIfExists('users');
        // Schema::dropIfExists('password_reset_tokens');
        // Schema::dropIfExists('sessions');
        // Schema::dropIfExists('post');
        // Schema::dropIfExists('post_likes');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
