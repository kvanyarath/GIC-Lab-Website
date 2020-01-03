<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvitedProfessorsController extends Controller
{
    public function index(){
        $datas = DB::table('invited_professors')
            ->orderBy('created_at','desc')
            ->paginate(10);

        $i=0;

        return view('frontend.invitedProfessors',array('datas'=>$datas,'i'=>$i,));
    }
    public function detail($link){
        $datas = DB::table('invited_professors')
            ->where('id','=',$link)
            ->first();
        return view('frontend.invitedProfessors_detail',array('datas'=>$datas));

    }
}
