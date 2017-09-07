<?php

namespace App\Http\Controllers;

use App\User;
use App\League;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leagues = League::all();

        return view('home', compact('leagues'));
    }
}
