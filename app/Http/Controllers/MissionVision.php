<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionVision extends Controller
{
    public function index()
    {
        return view('menu.missionVision');
    }
}
