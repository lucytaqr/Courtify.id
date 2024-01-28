<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SucceedController extends Controller
{
    public function index()
    {
        return view('succeed', [
            "title" => "COURTIFY - Payment Successful!",
            "bannerxs" => ""
        ]);
    }
}
