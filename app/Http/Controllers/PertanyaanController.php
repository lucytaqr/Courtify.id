<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use Illuminate\Support\Facades\Log;

class PertanyaanController extends Controller
{
    public function index()
    {
        return view('admin.pertanyaan.index', [
            "title" => "COURTIFY - Dashboard Pertanyaan",
            "pertanyaans" => Pertanyaan::latest()->filter(request(['search']))->paginate(5)
        ]);
    }

    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'domisili' => 'required|string',
                'pertanyaan' => 'required|string',
            ]);

            $pertanyaan = new Pertanyaan();
            $pertanyaan->name = $request->input('name');
            $pertanyaan->email = $request->input('email');
            $pertanyaan->phone = $request->input('phone');
            $pertanyaan->domisili = $request->input('domisili');
            $pertanyaan->pertanyaan = $request->input('pertanyaan');

            if ($pertanyaan->save()) {
                Log::info('Data berhasil disimpan', $pertanyaan->toArray());
                return redirect()->with('success', 'Data Pertanyaan berhasil ditambahkan!');
            } else {
                Log::error('Gagal menyimpan data');
                return redirect()->with('error', 'Gagal menyimpan data');
            }
        } catch (\Exception $e) {
            Log::error('Error during data storage', ['error' => $e->getMessage()]);
            return redirect()->with('error', 'Terjadi kesalahan saat menyimpan data');
        }
    }
}
