<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        return view('keranjang', [
            "title" => "COURTIFY - Keranjang",
            "bannerxs" => "Keranjang Booking"
        ]);
    }
}
