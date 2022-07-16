<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\volunteer;

class pageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function contactUs(){
        return view('contactUs');
    }
    public function donate(){
        return view('donate');
    }
    public function livingForACourse(){
        return view('livingForACourse');
    }
    public function patroitism(){
        return view('patroitism');
    }
    public function socialFundManagement(){
        return view('socialFundManagemenet');
    }
    public function team(){
        return view('team');
    }
    public function visionAndMission(){
        return view('visionAndMission');
    }
    public function whatWeDo(){
        return view('whatWeDo');
    }
    public function whoWeAre(){
        return view('whoAreWe');
    }
    public function ahavaLivelihood(){
        return view('ahavaLivelihood');
    }
 

    public function volunteerF(Request $request)
    {
        $data = new volunteer;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('index')->with('success', "Thank you, We'll get back to you.");
    }

    public function contact(Request $request)
    {
        $data = new contact;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('contactUs')->with('success', "Thank you for contacting us, We'll get in touch with  you.");
    }
}
