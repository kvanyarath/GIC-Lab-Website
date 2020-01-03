<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use DB;
use App\Http\Requests;
use App\SlideShow;
use App\ContactusMessage;

/**
 * Class ContactUsController.
 */
class ContactUsController extends Controller
{
	
    public function index()
    {
        // this function read the lastest input data by admin on contactus table
        $data[]  = DB::table('contact_us')->orderBy('created_at', 'desc')->first();
        return view('frontend.contactUs')->with('data',$data[0]);
    }
    
    public function storeQuestion(Request $requrest)
    {
        $data = new ContactusMessage;
        $data->name = $requrest->input('name');
        $data->email = $requrest->input('email');
        $data->question = $requrest->input('question');
        $data->messageStatus = 0;
        $data->save();
        return back()->with('info','Message Sent, Thank you!');
    }
  
}
?>