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
        Schema::create('ads_post_customer_meeting', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id');
            $table->Integer('post_id');
            $table->integer('with_bid');
            $table->integer('bid_id');
            $table->float('bid_amount');
            $table->date('meeting_date');
            $table->time('meeting_time');
            $table->integer('if_location_request');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('location_link');
            $table->integer('location_request_count');
            $table->integer('seller_approvel');
            $table->integer('admin_approvel');
            $table->integer('status');
            $table->integer('meeting_done');
            $table->integer('if_junk');
            $table->integer('if_reschedule');
            $table->integer('if_skipped');
            $table->integer('if_not_intersect');
            $table->integer('if_revisit');
            $table->integer('if_decisionpedding');
            $table->integer('if_expired');
            $table->integer('if_cancel');
            $table->integer('if_sold');
            $table->integer('if_reject_bid');
            $table->float('price_offered');
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads_post_customer_meeting');
    }
};