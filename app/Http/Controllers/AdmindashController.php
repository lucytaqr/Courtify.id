<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmindashController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            "title" => "COURTIFY - Dashboard Admin"
        ]);
    }
}
