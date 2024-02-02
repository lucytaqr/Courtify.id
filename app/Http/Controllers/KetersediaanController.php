<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KetersediaanController extends Controller
{
    public function index()
    {
        return view('ketersediaan', [
            "title" => "COURTIFY - Ketersediaan Lapangan"
        ]);
    }
}
