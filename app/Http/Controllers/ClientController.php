<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        
        return view('client/index');
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
        return view('client/rooms');
    }
}
