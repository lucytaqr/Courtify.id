<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearnmoreController extends Controller
{
    public function index() 
    {
        return view('learnmore', [
            "title" => "COURTIFY - Learn More"
        ]);
    }
}
