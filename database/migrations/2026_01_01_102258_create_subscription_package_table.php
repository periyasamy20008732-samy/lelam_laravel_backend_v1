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
        Schema::create('subscription_package', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id');
            $table->string('slug');
            $table->string('name');
            $table->string('image');
            $table->integer('if_ads');
            $table->integer('no_ads');
            $table->integer('if_options');
            $table->integer('validity');
            $table->integer('package_validity');
            $table->float('price');
            $table->integer('show_app_web');
            $table->integer('status');
            $table->integer('if_delete');
            $table->integer('if_dealer');
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_package');
    }
};