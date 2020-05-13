<?php

namespace App\Http\Controllers;

class AdminController extends Controller
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
     * admin index page
     *
     * @return \Illuminate\Http\Response
     **/
    public function index()
    {
        return view('admin');
    }
}
