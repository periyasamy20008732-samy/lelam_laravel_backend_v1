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
        Schema::create('ads_post_biddetails', function (Blueprint $table) {
            $table->id();
            $table->Integer('ads_post_id');
            $table->Integer('customerbid_id');
            $table->Integer('user_id');
            $table->string('user_mobile');
            $table->integer('if_auction');
            $table->integer('if_auction_end');
            $table->string('if_agree_bid_meeting');
            $table->string('if_reject_bid');
            $table->integer('amount');
            $table->string('remark');
            $table->integer('status');
            $table->integer('if_admin_dumb');
            $table->string('admin_dumb_username');
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads_post_biddetails');
    }
};
