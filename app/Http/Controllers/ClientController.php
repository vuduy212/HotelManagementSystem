<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\RoomCategories;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $roomCategories;
    protected $reservation;

    public function __construct(RoomCategories $roomCategories, Reservation $reservation)
    {
        $this->roomCategories = $roomCategories;
        $this->reservation = $reservation;
        //$this->middleware('auth');
    }

    public function index()
    {
        return view('hotel.index');
    }

    public function selectRoom(Request $request)
    {
        $room_category = $request->room_category;
        $checkin = $request->checkin;
        $checkout = $request->checkout;
        return view('client/reservation_after_book', compact('room_category', 'checkin', 'checkout'));
    }

    public function reservation_after_book()
    {
    }

    public function aboutUs()
    {
        return view('hotel/about-us');
    }

    public function contacts()
    {
        return view('hotel/contacts');
    }

    public function typography()
    {
        return view('hotel/typography');
    }

    public function reservation()
    {
        return view('client/reservation');
    }

    public function rooms()
    {
        $categories = RoomCategories::all();
        return view('client/rooms', compact('categories'));
    }
}
