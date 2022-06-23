<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use App\Models\RoomCategories;
use App\Rules\StrLengthRule;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReservationController extends Controller
{
    protected $reservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    public function searchReservation(Request $request)
    {
        $result = $this->reservation->searchReservationByInput($request->input);
        return view('AdminPage.reservation.list_reservation', compact('result'));
    }

    public function searchReservationByCode(Request $request)
    {
        $listResult = $this->reservation->searchReservationByCode($request->code);
        $result = $listResult[0];
        return view('AdminPage.reservation.detail')->with([
            // full info
            'id' => $result->id,
            'client_name' => $result->client_name,
            'phone' => $result->phone,
            'email' => $result->email,
            'ID_Card' => $result->ID_Card,
            'payment' => $result->payment,
            'category_name' => $result->category_name,
            'room_name' => $result->room_name,
            'number_of_adults' => $result->number_of_adults,
            'number_of_children' => $result->number_of_children,
            'checkin' => $result->checkin,
            'checkout' => $result->checkout,
            'price' => $result->price,
            'created_at' => $result->created_at,
            'time' => $result->time,
            'code' => $result->code
        ]);
    }

    public function viewDetail($id)
    {
        $listResult = $this->reservation->showDetailReservation($id);
        $result = $listResult[0];
        return view('AdminPage.reservation.detail')->with([
            // full info
            'id' => $result->id,
            'client_name' => $result->client_name,
            'phone' => $result->phone,
            'email' => $result->email,
            'ID_Card' => $result->ID_Card,
            'payment' => $result->payment,
            'category_name' => $result->category_name,
            'room_name' => $result->room_name,
            'number_of_adults' => $result->number_of_adults,
            'number_of_children' => $result->number_of_children,
            'checkin' => $result->checkin,
            'checkout' => $result->checkout,
            'price' => $result->price,
            'created_at' => $result->created_at,
            'time' => $result->time,
            'code' => $result->code
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $result = $this->reservation->searchReservation($request->all());
        $roomCategories = RoomCategories::all();
        $rooms = Room::all();
        foreach ($result as $res) {
            $checkinString = $res->checkin;
            $checkoutString = $res->checkout;
            $checkinTime = DateTime::createFromFormat('Y-m-d H:i:s', $checkinString);
            $checkoutTime = DateTime::createFromFormat('Y-m-d', $checkoutString);
            $res->checkin1 = $checkinTime->format('H, d/m/Y');
            $res->checkout1 = $checkinTime->format('H, d/m/Y');
        }
        return view('AdminPage.reservation.list_reservation', compact('result', 'roomCategories', 'rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        $roomCategories = RoomCategories::all();
        return view('AdminPage.reservation.create', compact('rooms', 'roomCategories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return view('AdminPage.reservation.show')->with([
            // full info
            'id' => $reservation->id,
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
            'code' => $reservation->code
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('AdminPage.reservation.edit')->with([
            'reservation' => $reservation,
        ]);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        // $this->validate($request, [
        //     'client_name' => [
        //         'required',
        //         'alpha_dash',
        //         Rule::unique('reservations')->ignore($reservation),
        //         new StrLengthRule()
        //     ],
        //     'email' => 'required|unique:users,email',
        //     'phone' => 'required|number',
        // ]);
        $reservation = $this->reservation->where('id', $reservation->id)->first();
        $reservation->client_name = $request->client_name;
        $reservation->ID_Card = $request->ID_Card;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->status = $request->status;
        $reservation->payment = $request->payment;
        // dd($reservation);
        $reservation->save();

        return redirect()->route('listAllReservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
