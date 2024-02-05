<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        return view('admin.pertanyaan.index', [
            "title" => "COURTIFY - Dashboard Pertanyaan",
            "pertanyaans" => Pertanyaan::latest()->filter(request(['search']))->paginate(5)
        ]);
    }
}
