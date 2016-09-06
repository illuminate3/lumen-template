<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * View : home
     *
     * @return view
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * View : welcome
     *
     * @return view
     */
    public function welcome()
    {
        return view('pages.welcome');
    }

}
