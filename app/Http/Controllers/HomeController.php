<?php

namespace App\Http\controllers;

use illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
     public function _construct()
     {
        $this->middleware('auth');
     }   


    /**
     * Show the application dashboard.
     * 
     * @return \illuminate\contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}   