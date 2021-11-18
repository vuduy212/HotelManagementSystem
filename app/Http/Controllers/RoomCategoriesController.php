<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoomCategoryRequest;
use App\Http\Requests\UpdateRoomCategoryRequest;
use App\Models\RoomBill;
use App\Models\RoomCategories;
use App\Rules\StrLengthRule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoomCategoriesController extends Controller
{
    protected $roomCategories;

    public function __construct(RoomCategories $roomCategories)
    {
        $this->roomCategories = $roomCategories;
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roomCategories = $this->roomCategories->search($request->all());
        return view('AdminPage.room_categories.index', compact('roomCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPage.room_categories.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function SelectCategoryOrder(RoomCategories $roomCategories)
    {
        $bills = RoomBill::all();
        return view('AdminPage.room_bills.selected', compact('bills', 'roomCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoomCategoryRequest $request)
    {
        $this->roomCategories->store($request);
        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomCategories  $roomCategories
     * @return \Illuminate\Http\Response
     */
    public function show(RoomCategories $roomCategories)
    {
        return view('AdminPage.room_categories.show')->with([
            'roomCategories' => $roomCategories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomCategories  $roomCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomCategories $roomCategories)
    {
        return view("AdminPage.room_categories.edit")->with([
            'roomCategories' => $roomCategories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomCategories  $roomCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomCategories $roomCategories)
    {
        $this->validate($request, [
            'category_name' => [
                'required',
                'alpha_dash',
                Rule::unique('room_categories')->ignore($roomCategories),
                new StrLengthRule()
            ],
            'description' => 'required|min:6|max:255',
            'price' => 'numeric|min:100|max:2000',
        ]);
        $roomCategories->updateCategory($request, $roomCategories);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomCategories  $roomCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomCategories $roomCategories)
    {
        $path = public_path().'/images/room_categories/' . $roomCategories->images;
        $roomCategories->deleteFile($path);
        $roomCategories->delete();
        return redirect()->route('categories.index');
    }
}
