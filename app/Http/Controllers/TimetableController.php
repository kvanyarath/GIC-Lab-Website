<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimetableController extends Controller
{
    public function index()
    {
        $year = ['Year 3', 'Year 4', 'Year 5', 'Master 1', 'Master 2'];
        if (isset($_GET['myfield'])) {
            $y = $_GET['myfield'];
            if (isset($_GET['semester'])) {
                $s = $_GET['semester'];
            } else {
                $s = 'Semester 1';
            }
            $timetable = DB::table('timetable')
                ->where('year', '=', $y)
                ->where('semester', '=', $s)
                ->orderBy('created_at', 'desc')
                ->get();
            $file = (json_decode($timetable[0]->timetable))[0]->download_link;
            $semester = $timetable[0]->semester;
            return view('frontend.timetable')->with('timetable', $timetable[0])->with('year', $year)->with('file', $file)->with('myfield', $y)->with('semester', $semester);
        } else {
            $timetable = DB::table('timetable')
                ->where('year', '=', 'Year 3')
                ->where('semester', '=', 'Semester 1')
                ->orderBy('created_at', 'desc')
                ->get();
            $file = (json_decode($timetable[0]->timetable))[0]->download_link;
            return view('frontend.timetable')->with('timetable', $timetable[0])->with('year', $year)->with('file', $file);
        }


    }

}
