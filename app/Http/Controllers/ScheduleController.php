<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        return view('schedule.index');
    }

    public function showList()
    {
        $schedules = \App\Schedule::all();
 
        return response()->json(['data' => $schedules,200]);
    }
}
