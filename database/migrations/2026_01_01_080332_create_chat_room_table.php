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
        Schema::create('chat_room', function (Blueprint $table) {
            $table->id();
            $table->string('chat_uniq_id');
            $table->integer('user_id_from');
            $table->integer('user_id_to');
            $table->integer('chat_rate_id');
            $table->string('chat_rate');
            $table->integer('status');
            $table->integer('notify_user_id_from');
            $table->integer('notify_user_id_to');
            $table->integer('notifi_admin');
            $table->integer('created_by');
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_room');
    }
};
