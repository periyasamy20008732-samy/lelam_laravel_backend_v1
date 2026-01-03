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
        Schema::create('site_config', function (Blueprint $table) {
            $table->id();
            $table->string('siteurl');
            $table->string('version');
            $table->string('site_title');
            $table->string('site_description');
            $table->string('meta_keyword')->nullable();
            $table->string('meta_details')->nullable();
            $table->string('logo');
            $table->string('min_logo');
            $table->string('fav_icon');
            $table->string('web_logo');
            $table->string('app_logo');
            $table->string('address');
            $table->integer('default_country');
            $table->string('site_email');
            $table->string('whatsapp_no');
            $table->string('sendgrid_API');
            $table->integer('if_googlemap');
            $table->string('googlemap_API');
            $table->integer('if_firebase');
            $table->string('firebase_config');
            $table->string('firebase_API');
            $table->integer('cod_status');
            $table->integer('razorpay_status');
            $table->string('razo_key_id');
            $table->string('razo_key_secret');
            $table->integer('ccavenue_status');
            $table->integer('ccavenue_testmode');
            $table->string('ccavenue_merchant_id');
            $table->string('ccavenue_access_code');
            $table->string('ccavenue_working_key');
            $table->integer('if_phonepe');
            $table->string('phonepe_merchantId');
            $table->string('phonepe_saltkey');
            $table->string('phonepe_mode');
            $table->integer('if_qrcodepayment');
            $table->string('upid');
            $table->integer('if_onesignal');
            $table->string('onesignal_id');
            $table->string('onesignal_key');
            $table->string('smtp_host');
            $table->string('smtp_port');
            $table->string('smtp_username');
            $table->string('smtp_password');
            $table->integer('if_testotp');
            $table->integer('if_msg91');
            $table->string('msg91_apikey');
            $table->integer('if_textlocal');
            $table->string('textlocal_apikey');
            $table->string('if_greensms');
            $table->string('greensms_accessToken');
            $table->string('greensms_accessTokenKey');
            $table->string('sms_senderid');
            $table->string('sms_entityId');
            $table->string('sms_dltid');
            $table->string('sms_msg');
            $table->integer('if_auction_start');
            $table->integer('auction_category_id');
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_config');
    }
};
