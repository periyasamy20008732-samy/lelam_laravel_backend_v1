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
        Schema::create('wallet_transaction', function (Blueprint $table) {
            $table->id();
            $table->integer('trans_id');
            $table->string('wallet_id');
            $table->string('user_id');
            $table->integer('pro_id');
            $table->string('amt_debit');
            $table->string('amt_credit');
            $table->string('transaction_details');
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet_transaction');
    }
};
