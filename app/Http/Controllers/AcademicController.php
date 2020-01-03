<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicController extends Controller
{
    //
    public function index(Request $request) {
        $degree_id = $request->get('degree');
        $program_year_id = $request->get('program_year');
        $degrees = \App\Degree::all();
        $program_years = \App\ProgramYear::all();
        $query = \App\FieldStudy::with(['degree', 'programYears']);
        if ($degree_id) {
            $query = $query->where('degree_id', $degree_id);
        }
        if ($program_year_id) {
            $query = $query->whereHas('programYears', function($q) use ($program_year_id) {
                $q->where('program_years.id', $program_year_id);
            });
        }
        $field_studies = $query->get();
        return view('frontend.academic.index', compact('degrees', 'program_years', 'field_studies', 'degree_id', 'program_year_id'));
    }

    public function getProgramField($id, $field) {
        $program = \App\FieldStudy::findOrFail($id);
        return view('frontend.academic.detail', compact('program', 'field'));
    }

    public function getFieldByDegree($id, $field) {
        $degree = \App\Degree::findOrFail($id); 
        $program = $degree->fieldStudies()->firstOrFail();
        return view('frontend.academic.detail', compact('program', 'field'));
    }
}
