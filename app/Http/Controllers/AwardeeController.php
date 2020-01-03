<?php

namespace App\Http\Controllers;

use App\Awardee;
use App\AcademicYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AwardeeController extends Controller
{
    public function index(){
        if(isset($_GET['myfield'])){
            $ac = $_GET['myfield'];
            $datas = DB::table('awardee')
                ->join('academic_years', 'awardee.id_academic_year', '=', 'academic_years.id')->orderBy('start_date', 'DESC')->select('awardee.*')
                ->where('id_academic_year','=',$ac)
            ->paginate(10);
            $academic_year = DB::table('academic_years')->orderBy('name','desc')->get();
            $year = AcademicYear::where('id', $ac)->first();
            return view('frontend.awardee')->with('datas',$datas)->with('academic_year',$academic_year)->with('year',$year)->with('myfield',$ac);

        }
        else{
            $datas = DB::table('awardee')
                ->join('academic_years', 'awardee.id_academic_year', '=', 'academic_years.id')->orderBy('start_date', 'DESC')->select('awardee.*')
                ->paginate(10);
            $academic_year = DB::table('academic_years')->orderBy('name','desc')->get();

            return view('frontend.awardee')->with('datas',$datas)->with('academic_year',$academic_year);
        }

    }
    public  function detail($link){
        $datas = DB::table('awardee')
            ->join('academic_years','academic_years.id','=','awardee.id_academic_year')
            ->where('awardee.id','=',$link)->first();

        return view('frontend.awardee_detail')->with('datas',$datas);
    }
}
