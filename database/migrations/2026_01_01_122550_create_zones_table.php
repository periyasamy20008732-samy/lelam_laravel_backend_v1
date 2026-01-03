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
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->integer('parent_id');
            $table->string('name')->nullable();
            $table->string('image');
            $table->string('description')->nullable();
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('popular');
            $table->integer('status');
            $table->string('allstore_onoff')->nullable();
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};
