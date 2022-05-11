<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomCategories;
use App\Models\Status;
use Illuminate\Http\Request;

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
        $room_category = $request->room_category;
        $date_checkin = str_replace("T", " ", $request->checkin);
        $date_checkout = str_replace("T", " ", $request->checkout);
        $request['checkin'] = $date_checkin . ':00';
        $request['checkout'] = $date_checkout . ':00';
        $roomStatus = $this->roomStatus->search($request->all());
        return view('AdminPage.statuses.index', compact('roomStatus'));
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
    public function show(Status $roomStatus)
    {
        return view('AdminPage.room_statuses.show')->with([
            'roomStatus' => $roomStatus,
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
