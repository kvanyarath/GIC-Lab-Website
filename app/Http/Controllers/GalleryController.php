<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhotoAlbum;
use App\Video;

class GalleryController extends Controller
{
    //

    public function getPhotos() {
        $photoAlbums = PhotoAlbum::with('photos')->orderBy('posted_date', 'DESC')->get();
        return view('frontend.gallery.photos', compact('photoAlbums'));
    }

    public function getVideos() {
        $videos = Video::orderBy('posted_date', 'DESC')->get();
        return view("frontend.gallery.videos", compact('videos'));
    }
}
