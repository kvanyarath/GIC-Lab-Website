<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScholarshipsController extends Controller
{
    public function index()
    {
        $datas  = DB::table('scholarships')->orderBy('posted_date', 'desc')->paginate(10);
        return view('frontend.scholarships')->with('datas',$datas);
    }
    public function detail($link)
    {
        $data_detail = DB::table('scholarships')->where('id',$link)->get();
        $title_en = $data_detail[0]->title_en;
        $title_kh = $data_detail[0]->title_kh;
        $data_en = $data_detail[0]->detail_info_en;
        $data_kh = $data_detail[0]->detail_info_kh;
     return view('frontend.detail_info_scholarship',array('data_en'=>$data_en,'data_kh'=>$data_kh,'title_en'=>$title_en,'title_kh'=>$title_kh));

    }
}
