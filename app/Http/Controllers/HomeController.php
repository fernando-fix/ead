<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function courses_all()
    {
        return view('courses_all');
    }

    public function my_account()
    {
        return view('my_account');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
