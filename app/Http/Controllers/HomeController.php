<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlideShow;
use DB;
use App\AboutGic;

class HomeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $list_slide = SlideShow::orderBy('created_at')->get();
        $title = "Home";
        $university_partners = [];
        $company_partners = [];

        $tmp = \App\PartnerType::with('partners')->where('typename_en', 'University')->first();
        if ($tmp) {
            $university_partners = $tmp->partners;
        }
        $tmp = \App\PartnerType::with('partners')->where('typename_en', 'Company')->first();
        if ($tmp) {
            $company_partners = $tmp->partners;
        }
        $latest_news = \App\News::orderBy('posted_date', 'DESC')->take(3)->get();
        $events = \App\Event::orderBy('start_date', 'DESC')->take(5)->get();
        $projects = \App\GicProject::orderBy('created_at', 'DESC')->take(2)->get();
        $student_messages = \App\StudentMessage::orderBy('created_at', 'DESC')->take(4)->get();
        $data = compact('list_slide', 'title', 'university_partners', 'company_partners', 'latest_news',
             'events', 'projects', 'student_messages');
        return view('frontend.homepage',$data);
    }

    public function facultyAndStaff() {
        $title = "Faculty and Staff";
        return view('frontend.facultyAndStaff',compact('title'));
    }
    
    public function research() {
        $title = "Research";
        return view('frontend.researches',compact('title'));
    }
    
    public function project() {
        return redirect('/gic-projects');
        // $title = "Project";
        // return view('frontend.projects',compact('title'));
    }
    
    public function incubator() {
        $data = \App\SiteContent::where('developer_name', 'incubations')->firstOrFail();
        return view('frontend.site-content.page', compact('data'));
    }
    
    public function seminar() {
        $title = "Seminar";
        return view('frontend.seminar',compact('title'));
    }

    
    public function who_we_are() {
        $title = "Who we are?";
        $lang = \App::getLocale();
        $aboutGic = AboutGic::select('about_us_text_kh', 'about_us_text_en')->first();
        $data = '';
        if ($aboutGic) {
            if ($lang == 'km') {
                $data = $aboutGic->about_us_text_kh;
            } else {
                $data = $aboutGic->about_us_text_en;
            }
        }
        return view('frontend.who_we_are',compact('title', 'data'));
    }

    
    public function mission() {
        $title = "Our missions";
        $lang = \App::getLocale();
        $aboutGic = AboutGic::select('mission_kh', 'mission_en')->first();
        $data = '';
        if ($aboutGic) {
            if ($lang == 'km') {
                $data = $aboutGic->mission_kh;
            } else {
                $data = $aboutGic->mission_en;
            }
        }
        return view('frontend.mission',compact('title', 'data'));
    }

    
    public function vision() {
        $title = "Our visions";
        $lang = \App::getLocale();
        $aboutGic = AboutGic::select('vision_kh', 'vision_en')->first();
        $data = '';
        if ($aboutGic) {
            if ($lang == 'km') {
                $data = $aboutGic->vision_kh;
            } else {
                $data = $aboutGic->vision_en;
            }
        }
        return view('frontend.vision',compact('title', 'data'));
    }
    
    public function aboutUs() {
        // this function read the lastest input data by admin on contactus table
        $data[]  = DB::table('about_us')->orderBy('created_at', 'desc')->first();
        $link[] = DB::table('about_us_link')->get();
        $learning_program[] = DB::table('learning_program')->get();
        $partnership[] = DB::table('partnership')->get();
        $viewData = [
            'data'=>$data[0], 
            'data_link'=>$link, 
            'learning_program'=>$learning_program,
            'partnership'=>$partnership,
            'title' => "About Us"
        ];
        return view('frontend.aboutUs' , $viewData);
    }

}
