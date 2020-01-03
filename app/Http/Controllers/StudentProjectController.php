<?php

namespace App\Http\Controllers;

use App\AcademicYear;
use Illuminate\Http\Request;
use App\StudentsProject;
use Illuminate\Support\Facades\DB;

class StudentProjectController extends Controller
{
    //
      public function index(){
          $project_types= DB::table('student_project_type')->get();
          $academic_year = DB::table('academic_years')->orderBy('name','desc')->get();
          if(isset($_GET['myfield']) && !isset($_GET['type'])){
              $ac = $_GET['myfield'];
              $projects= DB::table('student_project')
                  ->where('academic_year','=',$ac)
                  ->paginate(12);
              return view('frontend.student-project',array('projects'=>$projects,'academic_year'=>$academic_year,'myfield'=>$ac,'project_types'=>$project_types));

          }elseif(isset($_GET['myfield']) && isset($_GET['type'])) {
              $ac = $_GET['myfield'];
              $type = $_GET['type'];
              $projects= DB::table('student_project')
                  ->where('academic_year','=',$ac)
                  ->where('type','=',$type)
                  ->paginate(12);
              return view('frontend.student-project', array('projects' => $projects, 'academic_year'=>$academic_year,'project_types'=>$project_types,'type'=>$type,'myfield'=>$ac));
          }elseif(isset($_GET['type'])){
              $type = $_GET['type'];
              $projects= DB::table('student_project')
                  ->where('type','=',$type)
                  ->paginate(12);
              return view('frontend.student-project', array('projects' => $projects, 'academic_year'=>$academic_year,'project_types'=>$project_types,'type'=>$type));
          }
          else {
              $projects = DB::table('student_project')->paginate('12');
              return view('frontend.student-project', array('projects' => $projects, 'academic_year'=>$academic_year,'project_types'=>$project_types));
          }
     }
     public function detail($link){
         $data = DB::table('student_project')
             ->where('id','=',$link)
             ->first();
         return view('frontend.student-project-detail')->with('data',$data);

     }
}
