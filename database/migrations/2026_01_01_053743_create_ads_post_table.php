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
        Schema::create('ads_post', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->Integer('category_id');
            $table->string('image');
            $table->string('brand');
            $table->string('model');
            $table->string('model_variation');
            $table->string('description');
            $table->float('price');
            $table->integer('if_offer_price');
            $table->float('offer_price');
            $table->float('auction_price_intervel');
            $table->float('auction_starting_price');
            $table->string('attribute_id');
            $table->string('attribute_variations_id');
            $table->string('filters');
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('user_zone_id');
            $table->Integer('parent_zone_id');
            $table->Integer('zone_id');
            $table->string('land_mark');
            $table->Integer('if_auction');
            $table->Integer('auction_status');
            $table->dateTime('auction_startin')->nullable();
            $table->dateTime('auction_endin')->nullable();
            $table->Integer('auction_attempt');
            $table->Integer('admin_approval')->default(0);
            $table->Integer('if_finance');
            $table->integer('if_exchange');
            $table->integer('feature');
            $table->integer('status');
            $table->Integer('visiter_count');
            $table->Integer('if_sold');
            $table->Integer('if_expired');
            $table->integer('if_verifyed');
            $table->Integer('by_dealer');
            $table->Integer('created_by');
            $table->dateTime('posted_on')->nullable();
            $table->string('deleted_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads_post');
    }
};
