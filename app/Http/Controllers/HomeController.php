<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "COURTIFY"
        ]);
    }

    public function learnmore()
    {
        return view('learnmore', [
            "title" => "COURTIFY - Learn More"
        ]);
    }

}
