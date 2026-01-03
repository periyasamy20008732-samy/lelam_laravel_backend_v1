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
        Schema::create('attribute', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->Integer('list_order');
            $table->Integer('category_id');
            $table->Integer('form_validation');
            $table->Integer('if_details_icons');
            $table->string('details_icons');
            $table->Integer('details_icons_order');
            $table->Integer('show_filter');
            $table->Integer('status');
            $table->string(column: 'deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute');
    }
};
