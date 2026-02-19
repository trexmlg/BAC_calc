<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Vonage\Client;
use Vonage\Client\Credentials\Keypair;
use Vonage\Messages\MessageType\WhatsApp\WhatsAppText;




Route::post('/message', function () {
    // create initial message
    $to = config('vonage.sandbox_customer_number');
    $from = config('vonage.sandbox_whatsapp_number');
    $text = 'Tu ble i lohs';
    $message = new WhatsAppText($to, $from, $text);

    // get credentials
    $privateKeyPath = base_path(config('vonage.private_key'));
    $credentials = new Keypair(
        file_get_contents($privateKeyPath), 
        config('vonage.application_id')
    );

    // send message
    $sanboxBaseUrl = 'https://messages-sandbox.nexmo.com/v1/messages';
    $client = new Client($credentials);
    $client->messages()->getAPIResource()->setBaseUrl($sanboxBaseUrl);
    $client->messages()->send($message);

    return response()->json(['status' => 'Sent!']);
});