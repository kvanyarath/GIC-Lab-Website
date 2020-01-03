<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    public function index() {

        $calender = DB::table('calendar')->orderBy('created_at','desc')->first();
        return view('frontend.calendar')->with('calendar',$calender);
    }
}
