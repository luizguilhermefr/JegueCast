<?php

namespace App\Http\Controllers;

use App\Video;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::inRandomOrder()
            ->limit(8)
            ->get();

        return view('home', compact('videos'));
    }
}
