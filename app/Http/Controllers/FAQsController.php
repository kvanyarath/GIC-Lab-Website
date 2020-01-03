<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\FaqType;
use App\FaqParentType;

class FAQsController extends Controller
{
    //
    public function getIndex() {
        //$faqType = FaqType::with('faqs')->where('typename_en', $type)->first();
        //return view('frontend.faq', compact('faqType'));
        // $type =DB::table('faq_types')->get();
        // $datas = DB::table('faqs2')
        //     ->join('faq_types','faq_types.id','=','faqs2.faq_type_id')
        //     ->get();
            //print_r($datas);
        $types = FaqParentType::with(['faqTypes', 'faqTypes.faqs'])->get();
        return view('frontend.faq')->with('types',$types);
    }
}
