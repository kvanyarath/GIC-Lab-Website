<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosterController extends Controller
{
    //
    public function index() {
        $posters = \App\Poster::orderBy('created_at', 'DESC')->paginate(9);
        return view('frontend.poster.index', compact('posters'));
    }
}
