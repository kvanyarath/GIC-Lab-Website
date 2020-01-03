<?php

namespace App\Http\Controllers\Backend;
use DB;
use Illuminate\Http\Request;
use App\ScholarshipAlumini;
use App\Http\Requests;

use TCG\Voyager\Http\Controllers\VoyagerBaseController as VoyagerBaseController;

class ScholarshipAlumniController extends VoyagerBaseController
{
    public function edit(Request $request,$id){
		
    	if(isset($_POST["alumni_id"])){
			if(isset($_POST["Sid"])){
				$Sid = $request->get('Sid');
				$sch_alum=ScholarshipAlumini::find($Sid);
				$sch_alum->delete();
			}
			$alumni_id = $request->get('alumni_id');
			$title = $request->get('title');
			$scholarship_desc = $request->get('scholarship_desc');
			$scholarship_program = $request->get('scholarship_program');
			$LifeOverthere = $request->get('LifeOverthere');
			$country = $request->get('country');
    		$data = array('alumini_id' => $alumni_id,'title'=>$title,'scholarship_description'=>$scholarship_desc,'scholarship_program'=>$scholarship_program,'life_overthere'=>$LifeOverthere,'country'=>$country,"created_at" =>  \Carbon\Carbon::now());
    		DB::table('scholarship_alumini')->insert($data);
			return redirect('/admin/scholarship-alumini');
			
    	}else{
    		$scholarshipAlumni = DB::table('scholarship_alumini')
                ->where('id', $id) ->get();
    		return view('vendor.voyager.scholarship-alumini.edit-add',array('id'=>$id,'scholarship_alumni'=>$scholarshipAlumni));	
    	}
        
    }

}