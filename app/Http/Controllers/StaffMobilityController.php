<?php

namespace App\Http\Controllers;

use App\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Str;

class StaffMobilityController extends Controller
{
    public function index(){
        $datas = DB::table('staffs')
            ->join('missions', 'staffs.id', '=', 'missions.id_staff')
            ->select('staffs.fullname_en','staffs.id as id', 'missions.description as description' , 'staffs.profile_picture','missions.created_at as post_date')
            ->orderBy('missions.created_at','desc')
            ->paginate(10);

        $i=0;

        return view('frontend.staff_mobility',array('datas'=>$datas,'i'=>$i,));
    }
    public function detail($link){
        $datas = DB::table('staffs')
            ->join('missions', 'staffs.id', '=', 'missions.id_staff')
            ->join ('country','missions.id_country','=','country.id')
            ->select('staffs.fullname_en', 'missions.description as description' , 'staffs.profile_picture','country.name as name','missions.start_date as start_date','missions.end_date as end_date')
            ->where('staffs.id',$link)->get();
            $timestamp = strtotime($datas[0]->start_date);
            $sMonth = date('M', $timestamp);
            $sDay = date('d', $timestamp);
            $sY = date('y', $timestamp);
        $timestamp = strtotime($datas[0]->end_date);
        $eMonth = date('M', $timestamp);
        $eDay = date('d', $timestamp);
        $eY = date('y', $timestamp);
        return view('frontend.staff_mobility_detail_page',array('datas'=>$datas[0],'s_month'=>$sMonth,'s_day'=>$sDay,'s_year'=>$sY,'e_month'=>$eMonth,'e_day'=>$eDay,'e_year'=>$eY));
    }
}
