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
        Schema::create('ads_post_customerbid', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id');
            $table->Integer('post_id');
            $table->Integer(column: 'if_auction');
            $table->integer('if_auction_end');
            $table->integer('status');
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads_post_customerbid');
    }
};
