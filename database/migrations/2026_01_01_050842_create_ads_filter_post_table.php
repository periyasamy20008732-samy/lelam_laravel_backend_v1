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
        Schema::create('ads_filter_post', function (Blueprint $table) {
            $table->id();
            $table->Integer('attribute_id');
            $table->Integer('attribute_variations_id');
            $table->Integer('ads_post_id');
            $table->Integer('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads_filter_post');
    }
};
