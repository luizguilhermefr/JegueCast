<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main');
    }
}
