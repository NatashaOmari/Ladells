<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }
    
    public function birthday()
    {
        return view('home.birthday');
    }
    public function wedding()
    {
        return view('home.wedding');
    }
    public function graduation()
    {
        return view('home.graduation');
    }
    public function allevents()
    {
        return view('home.allevents');
    }
    public function singlecake()
    {
        return view('home.singlecake');
    }
    public function addcake()
    {
        return view('home.addcake');
    }
}
