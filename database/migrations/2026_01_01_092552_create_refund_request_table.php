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
        Schema::create('refund_request', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('bid_id');
            $table->integer('amount');
            $table->string('status')->default('pending');
            $table->integer('notification_status')->default(0);
            $table->string('amount_words');
            $table->text('reason');
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refund_request');
    }
};
