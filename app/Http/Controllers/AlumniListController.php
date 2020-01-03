<?php

namespace App\Http\Controllers;

use App\Aluminus;

use Illuminate\Http\Request;
use App\GratuatedYear;
use Illuminate\Support\Facades\DB;
use App\PromotionYear;

class AlumniListController extends Controller
{
    public function index(){

        if(isset($_GET['myfield'])) {
            $ac = $_GET['myfield'];
            $dataAlumni = DB::table('aluminus')
                ->where('promotion_year_id', '=', $ac)
                ->orderBy('name', 'asc')
                ->get();
            $dataYear = PromotionYear::orderBy('label_en','desc')->get();
            $year = PromotionYear::where('id','=',$ac)->get();
            return view('frontend.alumini-list',array('dataAlumni'=>$dataAlumni,'dataYear'=>$dataYear,'year'=>$year[0]));
        }else{
            $dataAlumni = DB::table('aluminus')->get();
            $dataYear = PromotionYear::orderBy('label_en','desc')->get();
            return view('frontend.alumini-list',array('dataAlumni'=>$dataAlumni,'dataYear'=>$dataYear));
        }

    }
}
