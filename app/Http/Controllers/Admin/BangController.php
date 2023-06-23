<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bang;
use App\Mail\NotifyMail;
use Mail;

class BangController extends Controller
{
    public function index(){

        $bangs = Bang::with('user')->orderBy("id","desc")->get();
        return view('admin.bang.index',compact('bangs')); 
    }

    public function sendEmail($id){ 
        $userData = Bang::with('user')->find($id)->toArray();  
        if(isset($userData['user']['email'])){
            Mail::to("spacey@little-spaces.com")->send(new NotifyMail($userData));
            // Mail::to($userData['user']['email'])->send(new NotifyMail($userData));
        
            if (Mail::failures()) {
                return redirect()->back()->with("error",'Sorry! Please try again latter');
            }else{
                return redirect()->back()->with("success",'Great! Successfully send in your mail');
            }
        }else{
            return redirect()->back()->with("error",'User email does not exist');
        }
    }

    public function sendMessage($id){

        $userData = Bang::with('user')->find($id)->toArray();  
        if(isset($userData['user']['mobile'])){
 
            $mobile =  $userData['user']['mobile'];
            $message = "Hi ".$userData['user']['name']."! Thanks for requesting your home’s 2023 ".$userData['type']." BANG! The BANG! ID is: ".$userData['bang_id']." and is valid for 1 ".$userData['type']." call out at ".$userData['user']['address'].".";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://us.sms.api.sinch.com/xms/v1/9b6c7f2298a5452cbb2a3a5daf13c138/batches');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "\n      {\n          \"from\": \"+447520651876\",\n          \"to\": [\n              \"$mobile\"\n          ],\n          \"body\": \"$message\"\n      }");

            $headers = array();
            $headers[] = 'Authorization: Bearer e15ec50ced9343deaee91e7ef431af05';
            $headers[] = 'Content-Type: application/json';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $result = curl_exec($ch); 
            if (curl_errno($ch)) {  }

            curl_close($ch);
            return redirect()->back()->with("success",'Great! Successfully send in your SMS');
        }else{
            return redirect()->back()->with("error",'User does not have mobile number entered');
        }

    }

}
