<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('front.index');
    }
    public function about() {
        return view('front.about');
    }
    public function recruitment() {
        return view('front.recruitment');
    }
    public function policy() {
        return view('front.policy');
    }

    public function consultancy() {
        return view('front.services.consultancy');
    }
    public function solution() {
        return view('front.services.solution');
    }
    public function outsourcing() {
        return view('front.services.outsourcing');
    }
    public function organization() {
        return view('front.services.organization');
    }
    public function performance() {
        return view('front.services.performance');
    }
    public function industrial() {
        return view('front.services.industrial');
    }
    public function mainstreaming() {
        return view('front.services.mainstreaming');
    }
    
    
    public function talent() {
        return view('front.services.talent');
    }
    public function business() {
        return view('front.services.business');
    }
    public function training() {
        return view('front.services.training');
    }
    public function process() {
        return view('front.services.process');
    }
    public function equality() {
        return view('front.services.equality');
    }


    public function stories() {
        return view('front.stories');
    }
    public function contact() {
        return view('front.contact');
    }
}
