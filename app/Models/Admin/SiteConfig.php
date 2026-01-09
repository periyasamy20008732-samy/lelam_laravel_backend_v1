<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    protected $table = 'site_config';
    protected $fillable = [
        'siteurl',
        'version',
        'site_description',
        'meta_keyword',
        'meta_details',
        'logo',
        'min_logo',
        'fav_icon',
        'web_logo',
        'app_logo',
        'address',
        'default_country',
        'site_email',
        'whatsapp_no',
        'sendgrid_API',
        'if_googlemap',
        'googlemap_API',
        'if_firebase',
        'firebase_config',
        'firebase_API',
        'cod_status',
        'razorpay_status',
        'razo_key_id',
        'razo_key_secret',
        'ccavenue_status',
        'ccavenue_testmode',
        'ccavenue_merchant_id',
        'ccavenue_access_code',
        'ccavenue_working_key',
        'if_phonepe',
        'phonepe_merchantId',
        'phonepe_saltkey',
        'phonepe_mode',
        'if_qrcodepayment',
        'upidb',
        'if_onesignal',
        'onesignal_id',
        'onesignal_key',
        'smtp_host',
        'smtp_port',
        'smtp_username',
        'smtp_password',
        'if_testotp',
        'if_msg91',
        'msg91_apikey',
        'if_textlocal',
        'textlocal_apikey',
        'if_greensms',
        'greensms_accessToken',
        'greensms_accessTokenKey',
        'sms_senderid',
        'sms_entityId',
        'sms_dltid',
        'sms_msg',
        'if_auction_start',
        'auction_category_id',
        'deleted_at'
    ];
}
