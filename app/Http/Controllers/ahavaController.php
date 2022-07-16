<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\volunteer;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ahavaController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function messages()
    {
        $message = contact::all();
        return view('admin.contactMessages', ['message'=>$message]);
    }
    public function volunteer()
    {   $volunteer = volunteer::all();
        return view('admin.volunteer',['volunteer'=> $volunteer]);
    }

    public function comot()
    {

        Session::flush();

        Auth::logout();

        return redirect()->route('index');
    }
}
