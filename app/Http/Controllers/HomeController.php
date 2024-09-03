<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return "Selamat Datang";
    }

    public function homePos()
    {
        return view('tampilanawal_pos');
    }
}