<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');

    }
    public function contact()
    {
        return view('contact');

    }
    public function about()
    {
        return view('about_us');

    }

    public function liveclass()
    {
        return view('liveclass');

    }

    public function blog()
    {
        return view('blog');

    }

    public function course()
    {
        return view('course');

    }
    public function laxicon()
    {
        return view('laxicon');

    }
    public function library()
    {
        return view('library');

    }
    public function french()
    {
        return view('french');

    }
    public function spanish()
    {
        return view('spanish');

    }
    public function german()
    {
        return view('german');

    }
    public function portuguese()
    {
        return view('portuguese');

    }
    public function basicprofile()
    {
        return view('basic_profile');

    }
    public function notification()
    {
        return view('notification');

    }
    public function password()
    {
        return view('password');

    }

}

