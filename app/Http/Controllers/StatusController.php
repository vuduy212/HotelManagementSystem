<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use App\Models\RoomCategories;
use App\Models\Status;
use App\Models\StatusDTO;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class StatusController extends Controller
{
    protected $roomStatus, $reservation;

    public function __construct(Status $roomStatus, Reservation $reservation)
    {
        $this->roomStatus = $roomStatus;
        $this->reservation = $reservation;
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = RoomCategories::all();
        return view('AdminPage/statuses/list_status', compact('categories'));
    }

    public function search(Request $request)
    {
        //process time input
        $date_checkin = str_replace("T", " ", $request->checkin);
        $date_checkout = str_replace("T", " ", $request->checkout);
        $request['checkin'] = $date_checkin . ':00';
        $request['checkout'] = $date_checkout . ':00';

        $checkin = $request['checkin'];
        $checkout = $request['checkout'];

        //search by time input
        $list_search = $this->roomStatus->searchByTimeInput($request->all());

        $results = array();

        $number_of_adults = $request->number_of_adults;
        $number_of_children = $request->number_of_children;

        //search by slots
        $slot_from_request = (int) ($number_of_adults + 0.5 * $number_of_children);
        foreach ($list_search as $search) {
            $slot_from_room = $search->double_bed * 2 + $search->single_bed;
            if ($slot_from_request <= $slot_from_room && $slot_from_request >= $slot_from_room - 1) {
                array_push($results, $search);
            }
        }

        //add STT
        $index = 0;
        foreach ($results as $status) {
            $index++;
            $status->index = $index;

            if ($status->images == null) {
                $status->images = 'a';
            }
            // //convert to array to show
            // $array_status = (array) $status;
            // $status->array_status = $array_status;
        }

        return view('AdminPage.statuses.index', compact('results', 'number_of_adults', 'number_of_children', 'checkin', 'checkout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        $status = Status::all();
        return view('AdminPage.room_statuses.create', compact('rooms', 'status'));
    }

    public function chart()
    {
        return view('AdminPage.statuses.chart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->roomStatus->saveStatus($request);
        return redirect(route('status.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function show($array_status)
    // {
    //     $status = $array_status;
    //     return view('AdminPage.statuses.show')->with([
    //         'category_name' => $status['category_name'],
    //         'room_name' => $status['room_name'],
    //         'double_bed' => $status['double_bed'],
    //         'single_bed' => $status['single_bed'],
    //         'images' => $status['images'],
    //         'price' => $status['price'],
    //         'description' => $status['description']
    //     ]);
    // }

    public function show($category_name, $room_name, $double_bed, $single_bed, $images, $price, $description, $number_of_adults, $number_of_children, $checkin, $checkout)
    {
        return view('AdminPage.statuses.show')->with([
            'category_name' => $category_name,
            'room_name' => $room_name,
            'double_bed' => $double_bed,
            'single_bed' => $single_bed,
            'images' => $images,
            'price' => $price,
            'description' => $description,
            // out parameter
            'number_of_adults' => $number_of_adults,
            'number_of_children' => $number_of_children,
            'checkin' => $checkin,
            'checkout' => $checkout
        ]);
    }

    public function order($category_name, $room_name, $price, $number_of_adults, $number_of_children, $checkin, $checkout)
    {
        return view('AdminPage.statuses.order')->with([
            'category_name' => $category_name,
            'room_name' => $room_name,
            'price' => $price,
            // out parameter
            'number_of_adults' => $number_of_adults,
            'number_of_children' => $number_of_children,
            'checkin' => $checkin,
            'checkout' => $checkout,
        ]);
    }

    public function reservation(Request $request)
    {
        // dd($request);
        $result = $this->reservation->saveReservation($request);
        return view('AdminPage.statuses.reservation')->with([
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
            'checkin' => $result->check_in,
            'checkout' => $result->check_out,
            'price' => $result->price,
            'created_at' => $result->created_at,
            'notification' => 'Success !'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $roomStatus)
    {
        $rooms = Room::all();
        return view("AdminPage.room_statuses.edit")->with([
            'roomStatus' => $roomStatus,
            'rooms' => $rooms,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $roomStatus)
    {
        $this->validate($request, [
            'time' => [
                'required',
                'date_format:"Y-m-d"',
                //Rule::unique('room_statuses')->ignore($roomStatus),
            ],
            'status' => 'required'
        ]);

        $roomStatus->time = $request->time;
        $roomStatus->status = $request->status;
        $roomStatus->room_id = $request->room_id;
        $roomStatus->save();

        return redirect()->route('status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $roomStatus)
    {
        $roomStatus->delete();
        return redirect()->route('status.index');
    }
}
