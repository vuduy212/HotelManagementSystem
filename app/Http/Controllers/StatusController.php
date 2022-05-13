<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomCategories;
use App\Models\Status;
use App\Models\StatusDTO;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class StatusController extends Controller
{
    protected $roomStatus;

    public function __construct(Status $roomStatus)
    {
        $this->roomStatus = $roomStatus;
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
            //convert to array to show
            $array_status = (array) $status;
            $status->array_status = $array_status;
        }

        return view('AdminPage.statuses.index', compact('results', 'number_of_adults', 'number_of_children'));
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
    public function show($array_status)
    {
        $status = $array_status;
        return view('AdminPage.statuses.show')->with([
            'category_name' => $status['category_name'],
            'room_name' => $status['room_name'],
            'double_bed' => $status['double_bed'],
            'single_bed' => $status['single_bed'],
            'images' => $status['images'],
            'price' => $status['price'],
            'description' => $status['description']
        ]);
    }

    // public function show(StatusDTO $status)
    // {
    //     return view('AdminPage.statuses.show')->with([
    //         'category_name' => $status->category_name,
    //         'room_name' => $status->room_name,
    //         'double_bed' => $status->double_bed,
    //         'single_bed' => $status->single_bed,
    //         'images' => $status->images,
    //         'price' => $status->price,
    //         'description' => $status->description
    //     ]);
    // }

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
