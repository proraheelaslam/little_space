<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BangRequestEmail;
use App\Models\Bang;
use App\Models\PostalCode;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function submitBangRequest(Request $request){
        
        $userData = $request->all();
        Mail::to('admin@getmyhomesbang.co.uk')->send(new BangRequestEmail($userData));
        $bang = new Bang();
        $bang->name = "";
        $bang->type = $request->bang_type;
        $bang->bang_id = $request->bangId;
        $bang->save();
        $user = new User();
        $user->name = $request->first_name.' '. $request->last_name;
        $user->email = $request->user_email;
        $user->bang_id = $bang->id;
        $user->postal_code = $request->postal_code;
        $user->password = "";
        $user->address = $request->address;
        //dd($userData);
        $user->save();
        return [
            'status'=> true,
            'data'=> $request->all()
        ];
    }

    /**
     * Postal Code Verification
     */
    function verifyPostalCode(Request $request){

        $postalCodeLists = ['W2'];
        $postalCode = strtoupper($request->postalCode);
        // $hasPostalCode = PostalCode::where('name', $postalCode)->first();
        $validPostalCode = 0;
        if (in_array($postalCode, $postalCodeLists)) {
            $validPostalCode = 1;
        }
        return [
            'status'=> true,
            'is_valid_postal_code'=> $validPostalCode
        ];
    }
}
