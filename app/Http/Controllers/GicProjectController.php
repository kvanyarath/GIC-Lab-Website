<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GicProject;

class GicProjectController extends Controller
{
    //
    public function index() {
        $gic_projects = GicProject::orderBy('created_at', 'DESC')->paginate(4);
        return view('frontend.gic-projects.index', compact('gic_projects'));
    }

    public function show($id) {
        $gic_project = GicProject::findOrFail($id);
        return view('frontend.gic-projects.show', compact('gic_project'));
    }

    public function showJqery($id) {
        $gic_project['data'] = GicProject::findOrFail($id);
        return json_encode($gic_project);
    }
}
