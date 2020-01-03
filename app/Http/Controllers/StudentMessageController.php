<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StudentMessageController extends Controller
{
    public function index() {
        $datas  = DB::table('student_message')->orderBy('created_at', 'desc')->paginate(10);
        return view('frontend.studentMessage')->with('datas',$datas);
    }
}
