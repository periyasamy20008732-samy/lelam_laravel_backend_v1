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
        Schema::create('chat_message', function (Blueprint $table) {
            $table->id();
            $table->integer('chat_room_id');
            $table->integer('user_id_from');
            $table->integer('user_id_to');
            $table->text('message');
            $table->integer('if_gift');
            $table->string('image');
            $table->integer('chat_coin');
            $table->integer('notify_user_from');
            $table->integer('notify_user_to');
            $table->integer('chat_from');
            $table->integer('status');
            $table->integer('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_message');
    }
};
