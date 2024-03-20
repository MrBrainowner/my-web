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
        Schema::create('plants', function (Blueprint $table) {
            $table->bigIncrements('plant_id');
            $table->unsignedBigInteger('seller_id');
            $table->string('plant_name')->nullable(false);
            $table->text('plant_description')->nullable(false);
            $table->decimal('plant_price', 10, 2)->nullable(false);
            $table->timestamps();
            // foreign keys
            $table->foreign('seller_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->index('seller_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
