<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('front.services.index'); // All front.services overview
    }

    public function business()
    {
        // Return the business services page
        return view('front.services.business');
    }

    public function process()
    {
        return view('front.services.process');
    }

    public function industrial()
    {
        return view('front.services.industrial');
    }

    public function mainstreaming()
    {
        return view('front.services.mainstreaming');
    }

    public function equality()
    {
        return view('front.services.equality');
    }

    public function talent()
    {
        return view('front.services.talent');
    }

    public function training()
    {
        return view('front.services.training');
    }

    public function consultancy()
    {
        return view('front.services.consultancy'); // Consultancy service page
    }

    public function solution()
    {
        return view('front.services.solution'); // People Solution service page
    }

    public function outsourcing()
    {
        return view('front.services.outsourcing'); // Outsourcing service page
    }

    public function organization()
    {
        return view('front.services.organization'); // Organization Structure and Redesign
    }

    public function performance()
    {
        return view('front.services.performance'); // Performance Management page
    }

    // Continue for other front.services
}
