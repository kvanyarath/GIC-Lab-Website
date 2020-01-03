<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportantLinkController extends Controller
{
    public function index(){
        $datas  = DB::table('important_link')->orderBy('title_en', 'asc')->paginate(15);
        return view('frontend.importantLink')->with('datas',$datas);
    }
}
