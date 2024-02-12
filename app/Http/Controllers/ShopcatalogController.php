<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lapangan;
use App\Models\Cabor;

class ShopcatalogController extends Controller
{
    public function index()
    {
        $banner = "SEWA LAPANGAN TERBAIKMU DISINI";
        if(request('cabor')) {
            $cabor = Cabor::firstWhere('slug', request('cabor'));
            $banner = ' Lapangan ' . $cabor->name;
        }
        return view('shopcatalog', [
            "title" => "COURTIFY - Catalog",
            "banner" => $banner,
            "breadcrumbs" => "Sewa lapangan",
            "lapangans" => Lapangan::latest()->filter(request(['search', 'cabor']))->paginate(12)->withQueryString()
        ]);
    }

    public function show(Lapangan $lapangan)
    {
        return view('shopdetails', [
            "title" => "COURTIFY - Detail",
            "banner" => "CARI TAHU LAPANGAN LEBIH LENGKAP",
            "breadcrumbs" => "Sewa lapangan",
            "lapangan" => $lapangan
        ]);
    }
}
