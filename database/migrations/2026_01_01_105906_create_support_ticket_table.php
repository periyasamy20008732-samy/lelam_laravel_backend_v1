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
        Schema::create('support_ticket', function (Blueprint $table) {
            $table->id();
            $table->string('uniq_id');
            $table->integer('userid');
            $table->string('mobile')->nullable();
            $table->string('subject');
            $table->text('msg');
            $table->integer('status')->default(0);
            $table->string('remark')->nullable();
            $table->integer('notifi_admin')->default(0);
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('support_ticket');
    }
};
