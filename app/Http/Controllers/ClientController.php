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

    public function searchReservation(Request $request)
    {
        $result = $this->reservation->searchReservation($request->input);
        dd($result);
        return view('AdminPage.statuses.reservation')->with([
            // full info
            'id' => $result['id'],
            'client_name' => $result['client_name'],
            'phone' => $result['phone'],
            'email' => $result['email'],
            'cmnd' => $result['CMND'],
            'payment' => $result['payment'],
            'category_name' => $result['category_name'],
            'room_name' => $result['room_name'],
            'number_of_adults' => $result['number_of_adults'],
            'number_of_children' => $result['number_of_children'],
            'checkin' => $result['checkin'],
            'checkout' => $result['checkout'],
            'price' => $result['price'],
            'created_at' => $result['created_at'],
            'time' => $result['time'],
        ]);
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
