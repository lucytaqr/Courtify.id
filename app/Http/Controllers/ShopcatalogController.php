<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lapangan;

class ShopcatalogController extends Controller
{
    public function index()
    {
        return view('shopcatalog', [
            "title" => "COURTIFY - Catalog",
            "banner" => "SEWA LAPANGAN TERBAIKMU DISINI",
            "lapangans" => Lapangan::all()
        ]);
    }

    public function show($slug)
    {
        return view('shopdetails', [
            "title" => "COURTIFY - Detail",
            "banner" => "CARI TAHU LAPANGAN LEBIH LENGKAP",
            "lapangan" => Lapangan::find($slug)
        ]);
    }
}
