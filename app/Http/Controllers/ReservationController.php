<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

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
            'cmnd' => $result->CMND,
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
        return view('AdminPage.reservation.list_reservation', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
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
        //
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
