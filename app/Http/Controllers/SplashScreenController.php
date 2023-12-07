<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SplashScreenController extends Controller
{
    public function firstPage()
    {
        return view('SplashScreen');
    }
}
