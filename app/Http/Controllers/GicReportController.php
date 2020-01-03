<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GicReportController extends Controller
{
    public function index(){
        $slide =DB::table('report_slide')->paginate('50');
        return view('frontend.report_slide_about_gic')->with('slides',$slide);
    }
}
