<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        return view('dashboarduser', [
            "title" => "COURTIFY - Dashboard"
        ]);
    }
}
