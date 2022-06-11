<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    protected $reservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }
    //
    public function sendEmail(Reservation $reservation)
    {
        $details = [
            'title' => 'Dear Mr/Mrs ' . $reservation->client_name,
            'body' => 'This is your reservation !',
            'client_name' => $reservation->client_name,
            'phone' => $reservation->phone,
            'email' => $reservation->email,
            'ID_Card' => $reservation->ID_Card,
            'payment' => $reservation->payment,
            'category_name' => $reservation->category_name,
            'room_name' => $reservation->room_name,
            'number_of_adults' => $reservation->number_of_adults,
            'number_of_children' => $reservation->number_of_children,
            'checkin' => $reservation->checkin,
            'checkout' => $reservation->checkout,
            'price' => $reservation->price,
            'created_at' => $reservation->created_at,
            'time' => $reservation->time,
        ];

        Mail::to($reservation->email)->send(new TestMail($details));
        return "Email sent";
    }
}
