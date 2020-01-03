<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController as VoyagerBaseController;
use TCG\Voyager\Facades\Voyager;
use App\PhotoAlbum;
use App\Photo;
use Carbon\Carbon;

class PhotoAlbumController extends VoyagerBaseController
{
    //

    public function show(Request $request, $id)
    {
        $slug = $this->getSlug($request);
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        $view = "voyager::$slug.read";
        $photoAlbum = PhotoAlbum::with('photos')->findOrFail($id);
        return Voyager::view($view, compact('dataType', 'id', 'photoAlbum'));
    }

    public function postPhoto(Request $request, $id) {
        $photoAlbum = PhotoAlbum::findOrFail($id);
        $date = Carbon::now()->format('MY');
        foreach($request->file_location as $file) {
            $photoAlbum->photos()->create([
                'file_location' => $file->store('public/photos/'.$date)
            ]);
        }
        return redirect()->back()->with([
            'message'    => __('voyager::generic.successfully_added_new')." Photo",
            'alert-type' => 'success',
        ]);;
    }

    public function deletePhoto(Request $request) {
        $res = Photo::destroy($request->get('id'));
        $data = $res
            ? [
                'message'    => __('voyager::generic.successfully_deleted')." Photo",
                'alert-type' => 'success',
            ]
            : [
                'message'    => __('voyager::generic.error_deleting')." Photo",
                'alert-type' => 'error',
            ];
        return redirect()->back()->with($data);
    }
}
