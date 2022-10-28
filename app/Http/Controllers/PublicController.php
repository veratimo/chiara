<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function insicureStabilita()
    {
        return view('projects.insicureStabilita');
    }

    public function ilTubo()
    {
        return view('projects.ilTubo');
    }

    public function ilCubo()
    {
        return view('projects.ilCubo');
    }

    public function insideTheOutside()
    {
        return view('projects.insideTheOutside');
    }

    public function theBelly()
    {
        return view('projects.theBelly');
    }

    public function theSign()
    {
        return view('projects.theSign');
    }

    public function mirrors()
    {
        return view('projects.mirrors');
    }

    public function lateralmente()
    {
        return view('lateralmente');
    }
}
