<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $users;

    public function __construct(User $users)
    {
        $this->users = $users;
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $this->users->search($request->all());
        return view('AdminPage.users.index', compact('users'));
    }
}
