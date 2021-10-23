<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomStatus;
use Illuminate\Http\Request;

class RoomStatusController extends Controller
{
    protected $roomStatus;

    public function __construct(RoomStatus $roomStatus)
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
        $roomStatus = $this->roomStatus->search($request->all());
        return view('AdminPage.room_statuses.index', compact('roomStatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        $status = RoomStatus::all();
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
    public function show(RoomStatus $roomStatus)
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
    public function edit(RoomStatus $roomStatus)
    {
        $rooms = Room::all();
        //$room1 = RoomStatus::first()->rooms()->where('room_name', 'foo')->first();;
        return view("AdminPage.room_statuses.edit")->with([
            'roomStatus' => $roomStatus,
            'rooms' => $rooms,
            //'room1' => $room1,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomStatus $roomStatus)
    {
        $roomStatus->time = $request->time;
        $roomStatus->status = $request->status;
        $roomStatus->room_name = $request->room_name;
        $roomStatus->save();

        return redirect()->route('status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomStatus $roomStatus)
    {
        $roomStatus->delete();
        return redirect()->route('status.index');
    }
}
