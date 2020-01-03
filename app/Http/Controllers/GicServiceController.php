<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GicServiceController extends Controller
{
    public function index(){
        $counter = DB::table('gic_service_counter')->orderBy('created_at','desc')->first();
        $services =DB::table('gic_service')->get();
        return view('frontend.gic-service')->with('services',$services)->with('counter',$counter);
    }
    public function detail($link){
        $services =DB::table('gic_service')
            ->where('id','=',$link)
            ->get();
        return view('frontend.gic-serviceDetail')->with('service',$services);
    }
}
