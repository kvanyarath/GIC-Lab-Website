<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PartnerType;

class PartnerController extends Controller
{
    //

    public function getIndex($type) {
        $partnerType = PartnerType::with('partners')->where('typename_en', $type)->first();
        return view('frontend.partners.index', compact('partnerType'));
    }
}
