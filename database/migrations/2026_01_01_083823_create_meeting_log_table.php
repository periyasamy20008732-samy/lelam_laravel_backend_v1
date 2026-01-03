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
        Schema::create('meeting_log', function (Blueprint $table) {
            $table->id();
            $table->integer('meeting_id');
            $table->integer('post_id');
            $table->integer('seller_id');
            $table->integer('buyer_id');
            $table->string('action');
            $table->text('remark');
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
        Schema::dropIfExists('meeting_log');
    }
};
