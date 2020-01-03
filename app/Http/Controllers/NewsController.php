<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    //
    public function getIndex() {
        $data = News::orderBy('posted_date', 'DESC')->paginate(10);
        return view('frontend.news.index', compact('data'));
    }

    public function show($id) {
        $news = News::findOrFail($id);
        $latest_news = News::orderBy('posted_date', 'DESC')->take(4)->get();
        return view('frontend.news.show', compact('news', 'latest_news'));
    }
}
