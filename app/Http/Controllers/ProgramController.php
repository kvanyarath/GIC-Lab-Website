<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index() {
        $title = "Program";
        return view('frontend.program.index' , compact('title'));
    }

    public function futureStudent() {
        $title = "Future Student";
        return view('frontend.program.futureStudent' , compact('title'));
    }
    
    public function alumni() {
        $title = "Alumni";
        return view('frontend.program.alumni' , compact('title'));
    }

    public function event() {
        $title = "Alumni";
        return view('frontend.program.event' , compact('title'));
    }
}
