<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PromotionYear;
use App\GratuatedYear;
use App\Aluminus;
use Carbon\Carbon;

class AlumnusController extends Controller {

    public function createMultiple() {
        $gYears = GratuatedYear::pluck('year', 'id')->toArray();
        $pYears = PromotionYear::pluck('label_en', 'id')->toArray();
        return view('vendor.voyager.aluminus.create_multiple', compact('gYears', 'pYears'));
    }

    public function storeMultiple(Request $request) {
        $gYear = $request->get('gratuate_year');
        $pYear = $request->get('promotion_year_id');
        $data = [];
        $now = Carbon::now();
        $month = $now->format('MY');
        foreach($request->file('photos') as $p) {
            $name = $p->getClientOriginalName();
            $name = explode('.', $name)[0];
            $name = explode('0', $name)[0];
            $p = $p->store('public/aluminus/'.$month);
            $p = explode('/', $p);
            array_shift($p);
            $path = implode('\\', $p);
            $d = [
                'gratuate_year' => $gYear,
                'promotion_year_id' => $pYear,
                'name' => $name,
                'profile_photo' => $path,
                'created_at' => $now
            ];
            array_push($data, $d);
        }
        Aluminus::insert($data);
        return redirect()->back()->with([
            'message'    => __('voyager::generic.successfully_added_new'),
            'alert-type' => 'success',
        ]);;
    }
}