<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bang;
use Illuminate\Http\Request;

class BangController extends Controller
{
    //
    public function showActivateBang(Request $request){

        return view('frontend.pages.bang_activation.bang_activation');
    }

    public function verifyBangId(Request $request){

        $status = 0;
        $message = 'Your bang is not activated please try again';
        $bang = Bang::where('id', $request->id)->where('bang_id', $request->bangId)->first();
        if(!is_null($bang)){
           $status = 1;
           $message = 'The bang has been activated';
        }
        return [
            'status'=> $status,
            'message'=> $message
        ];
         
    }
}
