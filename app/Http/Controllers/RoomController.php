<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomCategories;
use App\Models\RoomStatus;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    protected $rooms;

    public function __construct(Room $rooms)
    {
        $this->rooms = $rooms;
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rooms = $this->rooms->search($request->all());
        return view('AdminPage.rooms.index', compact('rooms'));
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
        //$roomStatus = RoomStatus::all();
        return view('AdminPage.rooms.create', compact('rooms', 'roomCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->rooms->saveRoom($request);
        return redirect(route('rooms.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('AdminPage.rooms.show')->with([
            'room' => $room,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        $roomCategories = RoomCategories::all();
        return view("AdminPage.rooms.edit")->with([
            'roomCategories' => $roomCategories,
            'room' => $room,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $room->room_name = $request->room_name;
        $room->category_name = $request->category_name;
        $room->description = $request->description;
        $room->save();

        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index');
    }
}
