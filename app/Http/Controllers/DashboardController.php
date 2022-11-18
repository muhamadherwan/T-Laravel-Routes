<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function __invoke()
    {
        // dd('mymy');
            return view('dashboard');
    }
}
