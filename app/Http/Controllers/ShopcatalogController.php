<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopcatalogController extends Controller
{
    public function index()
    {
        return view('shopcatalog', [
            "title" => "COURTIFY - Catalog"
        ]);
    }
}
