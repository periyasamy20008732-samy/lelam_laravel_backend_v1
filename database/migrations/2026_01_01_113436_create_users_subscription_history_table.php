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
        Schema::create('users_subscription_history', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('subscription_id');
            $table->float('price');
            $table->string('validity');
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
        Schema::dropIfExists('users_subscription_history');
    }
};
