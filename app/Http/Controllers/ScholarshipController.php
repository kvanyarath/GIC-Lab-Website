<?php

namespace App\Http\Controllers;
use DB;
use App\ScholarshipSliderImage;
use App\ScholarshipCountry;
use App\ScholarshipAlumini;
use App\Alumni;


use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index() {
        $img = '/assets/img-temp/100x100/img5.jpg';
        $testPagination = false;
        $data_slider = ScholarshipSliderImage::all();
        $data_scholarship_alumini_all = ScholarshipAlumini::all();
        $scholarship_country = ScholarshipCountry::all();
        $data_general_scholarship  = DB::table('general_scholarship')->orderBy('created_at', 'desc')->first();
        $data_scholarship = DB::table('scholarship')->orderBy('created_at', 'desc')->paginate(3)->onEachSide(1);
        $data_scholarship_alumini = DB::table('scholarship_alumini')->paginate(1)->OnEachSide(1);
        return view('frontend.scholarship.scholarship', compact('img'),array('data_general_scholarship'=>$data_general_scholarship,'data_scholarship'=>$data_scholarship,'data_scholarship_alumini'=>$data_scholarship_alumini,'$data_alumini_all'=>$data_scholarship_alumini_all,'testPagination'=>$testPagination,'data_slider'=>$data_slider,'country'=>$scholarship_country,'country_photo'=>'0'));
        
    }
    public function page_tab($link){
        $img = '/assets/img-temp/100x100/img5.jpg';
        $data_slider = ScholarshipSliderImage::all();
        $scholarship_country = ScholarshipCountry::all();
        $data_scholarship_alumini_all = ScholarshipAlumini::all();
        if(isset($_GET['myfield'])){
            $testPagination = false;
            $myfield = $_GET['myfield'];
            $data_scholarship_alumini1 = DB::table('scholarship_alumini')->where('country', $myfield)->orderBy('created_at', 'desc')->paginate(1)->OnEachSide(1);
            // $data_scholarship_alumini = DB::select('select * from scholarship_alumini where country = :id', ['id' => $myfield]);
            $alumnis = DB::table('alumni')->where('id', $data_scholarship_alumini1[0]->alumini_id)->get();
            $data_general_scholarship  = DB::table('general_scholarship')->orderBy('created_at', 'desc')->first();
            $data_scholarship = DB::table('scholarship')->orderBy('created_at', 'desc')->paginate(3)->onEachSide(1);
            return view('frontend.scholarship.scholarship', compact('img'),array('data_alumini_all'=>$data_scholarship_alumini_all, 'data_general_scholarship'=>$data_general_scholarship,'data_scholarship'=>$data_scholarship,'data_scholarship_alumini1'=>$data_scholarship_alumini1,'link'=>$link,'testPagination'=>$testPagination,'data_slider'=>$data_slider,'country'=>$scholarship_country,'alumnis'=>$alumnis,'myfield'=>$myfield,'country_photo'=>'0'));
        }else{
            $testPagination = true;
            $data_general_scholarship  = DB::table('general_scholarship')->orderBy('created_at', 'desc')->first();
            $data_scholarship = DB::table('scholarship')->orderBy('created_at', 'desc')->paginate(3)->onEachSide(1);
            $data_scholarship_alumini = DB::table('scholarship_alumini')->paginate(1)->OnEachSide(1);
            $alumnis = DB::table('alumni')->where('id', $data_scholarship_alumini[0]->alumini_id)->get();
            $data_scholarship_advisor = DB::table('scholarship_advisor')->orderBy('created_at', 'desc')->paginate(3)->OnEachSide(1);
            return view('frontend.scholarship.scholarship', compact('img'),array('data_alumini_all'=>$data_scholarship_alumini_all, 'data_general_scholarship'=>$data_general_scholarship,'data_scholarship'=>$data_scholarship,'data_scholarship_alumini'=>$data_scholarship_alumini,'link'=>$link,'testPagination'=>$testPagination,'scholarship_advisor'=>$data_scholarship_advisor,'data_slider'=>$data_slider,'alumnis'=>$alumnis,'country'=>$scholarship_country,'country_photo'=>'0'));
        }
        
    }
}
