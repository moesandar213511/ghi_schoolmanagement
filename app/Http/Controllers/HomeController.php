<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        if(Auth::user()->role == "admin")
        {
            return redirect('/admin');
        }
        elseif(Auth::user()->role == "staff")
        {
            return redirect('/staff');
        }
        elseif(Auth::user()->role == "teacher")
        {
            return redirect('/teacher');
        }
        elseif(Auth::user()->role == "parent")
        {
            return redirect('/parent');
        }
        elseif(Auth::user()->role == "student")
        {
            return redirect('/student');
        }
    }
}
