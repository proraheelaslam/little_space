<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bang;

class DashboardController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){ 
        $bang = Bang::count();
        return view('admin.dashboard',compact('bang'));
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('admin.login');
    }

    public function emailTemplate()
    {
        return view('admin.emails.bang_email');
    }
 
}
