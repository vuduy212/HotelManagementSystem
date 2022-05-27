<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class NotificationController extends Controller
{
    public function sendSms()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("374f6105", "lNWPlUa2v0yxNFx3");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("84967775035", 'Vonage APIs', 'A text message sent using the Nexmo SMS API')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }

    public static function sms($phone, $content)
    {
        $account_sid = env('TWILIO_SID');
        $account_token = env('TWILIO_TOKEN');
        $number = env('TWILIO_FROM');

        //process phone number
        $phone = ltrim($phone, $phone[0]);
        $phone = "+84" . $phone;

        $client = new Client($account_sid, $account_token);
        $client->messages->create($phone, [
            'from' => $number,
            'body' => $content
        ]);
    }

    public static function randomCode()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring .= $characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }
}
