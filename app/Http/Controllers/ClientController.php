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
        $categories = RoomCategories::all();
        return view('client/index', compact('categories'));
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

    public function activities()
    {
        return view('client/activities');
    }

    public function contact()
    {
        return view('client/contact');
    }

    public function details()
    {
        return view('client/details');
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
