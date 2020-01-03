<?php

namespace App\Http\Controllers\Backend;
use DB;
use Illuminate\Http\Request;
use App\ContactusMessage;

use App\Http\Requests ;
use TCG\Voyager\Http\Controllers\VoyagerBaseController as VoyagerBaseController;

class ContactUsMessageController extends VoyagerBaseController
{
    public function setMark(Request $request,$id){
    
        $user = ContactusMessage::find($id);
        $user1 = ContactusMessage::findOrFail($id);
        $user1->delete();
        $data = new ContactusMessage;
        $data->name = $user->name;
        $data->email = $user->email;
        $data->question = $user->question;
        
        if($user->messageStatus == 0){
            $data->messageStatus = 1;
        }if($user->messageStatus == 1){
            $data->messageStatus = 0;
        }
        $data->save();
        return back();
      
    }
}
