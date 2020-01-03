<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContent;

class SiteContentController extends Controller
{
    //
    public function getPageByName($name) {
        $data = SiteContent::withTranslations()->where('developer_name', $name)->firstOrFail()->translate();
        return view('frontend.site-content.page', compact('data'));
    }
}
