<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Twilio Verify Configuration
    |--------------------------------------------------------------------------
    |
    | You can find your Account SID and Auth Token in the Console Dashboard.
    | Additionally you should create a new Verify service and paste it in
    | here. Afterwards you are ready to communicate with Twilio Verify.
    |
    */

    'url' => env('TWILIO_URL', 'https://verify.twilio.com/v2/Services'),
    'account_sid' => env('TWILIO_ACCOUNT_SID', 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'),
    'auth_token' => env('TWILIO_AUTH_TOKEN', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'),
    'service_sid' => env('TWILIO_SERVICE_SID', 'VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'),

];
