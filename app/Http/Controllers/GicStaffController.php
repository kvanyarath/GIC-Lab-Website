<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\StaffPosition;
use App\Staff;

class GicStaffController extends Controller
{
    public function index(){

//        $dataPosition = DB::table('staff_position')
//            ->where('staff_position.priority','<>',6)
//            ->where('staff_position.priority','<>',5)
//            ->orderBy('priority','desc')->get();
//        $dataHeadVice = DB::table('staff_position')->where('priority','=','6')->get();
        $staff = DB::table('staffs')
            ->select('staffs.id as id','staff_position.staff_position as staff_position','staffs.position','staffs.profile_picture','staffs.fullname_en','staff_position.group as group')
            ->join('staff_position','staff_position.id','=','staffs.position')
            ->orderBy('staff_position.staff_position','asc')->get();
//        $datas = DB::table('staffs')
//            ->select('staffs.id as id','staff_position.staff_position','staffs.position','staffs.profile_picture','staffs.fullname_en')
//            ->join('staff_position','staff_position.id','=','staffs.position')
//            ->where('staff_position.priority','<>',"6")
//            ->Where('staff_position.priority', '<>','5')
//            ->orderBy('priority','desc')->get();


//        return view('frontend.gic-staff')->with('dataHead',$dataHead)->with('dataPosition',$dataPosition)->with('dataHeadVice',$dataHeadVice)->with('datas',$datas);
        $dataPosition = DB::table('staff_position')->orderBy('group','asc')->get()  ;
        return view('frontend.gic-staff',array('positions'=>$dataPosition, 'staffs'=>$staff));

//
    }
    public function detail($link){
        $datas = DB::table('staffs')
            ->where('staffs.id',$link)->get();
        $dataPosition = DB::table('staff_position')->where('staff_position.id','=',$datas[0]->position)->get();
        return view('frontend.gic-staff-detail')->with('datas',$datas[0])->with('dataPosition',$dataPosition[0]);

    }
}
