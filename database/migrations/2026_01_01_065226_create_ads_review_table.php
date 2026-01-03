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
        Schema::create('ads_review', function (Blueprint $table) {
            $table->id();
            $table->Integer('parent_id');
            $table->Integer('post_id');
            $table->Integer('user_id');
            $table->float('rating');
            $table->string('comment');
            $table->Integer('status');
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads_review');
    }
};
