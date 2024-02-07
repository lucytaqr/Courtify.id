<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopdetailsController extends Controller
{
    public function index()
    {
        return view('shopdetails', [
            "title" => "COURTIFY - Detail",
            "banner" => "CARI TAHU LAPANGAN LEBIH LENGKAP"
        ]);
    }
}
