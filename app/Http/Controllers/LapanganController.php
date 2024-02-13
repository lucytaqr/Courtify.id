<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use App\Models\Cabor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class LapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.lapangan.index', [
            "title" => "COURTIFY - Dashboard Lapangan",
            "lapangans" => Lapangan::filter(request(['search']))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lapangan.create', [
            "title" => "COURTIFY - Dashboard Lapangan",
            "cabors" => Cabor::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|unique:lapangans',
            'cabor_id' => 'required',
            'tarif' => 'required',
            'alamat' => 'required',
            'thumbnail' => 'image|file|max:1024',
            'gambar1' => 'image|file|max:1024',
            'gambar2' => 'image|file|max:1024',
            'deskripsi' => 'required'
        ]);

            if($request->file('thumbnail')) {
                $validatedData['thumbnail'] = $request->file('thumbnail')->store('lapangan-images');
            }

            if($request->file('gambar1')) {
                $validatedData['gambar1'] = $request->file('gambar1')->store('lapangan-images');
            }

            if($request->file('gambar2')) {
                $validatedData['gambar2'] = $request->file('gambar2')->store('lapangan-images');
            }


            $validatedData['deskripsi'] = strip_tags($request->deskripsi);

            Lapangan::create($validatedData);

            return redirect('/admin/lapangans')->with('success', 'Data lapangan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lapangan $lapangan)
    {
        return view('admin.lapangan.show', [
            'lapangan' => $lapangan,
            "title" => "COURTIFY - Detail Lapangan",
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lapangan $lapangan)
    {
        return view('admin.lapangan.edit', [
            "title" => "COURTIFY - Edit Lapangan",
            "lapangan" => $lapangan,
            "cabors" => Cabor::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lapangan $lapangan)
    {
        $rules = [
            'nama' => 'required|max:255',
            'cabor_id' => 'required',
            'tarif' => 'required',
            'alamat' => 'required',
            'thumbnail' => 'image|file|max:1024',
            'gambar1' => 'image|file|max:1024',
            'gambar2' => 'image|file|max:1024',
            'deskripsi' => 'required'
        ];

        if($request->slug != $lapangan->slug) {
            $rules['slug'] = 'required|unique:lapangans';
        }

        $validatedData = $request->validate($rules);

        $validatedData['deskripsi'] = strip_tags($request->deskripsi);

        if($request->file('thumbnail')) {
            if($request->oldImage) {
                Storage::delete($request->oImage);
            }
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('lapangan-images');
        }

        if($request->file('gambar1')) {
            if($request->oldImage) {
                Storage::delete($request->lImage);
            }
            $validatedData['gambar1'] = $request->file('gambar1')->store('lapangan-images');
        }

        if($request->file('gambar2')) {
            if($request->oldImage) {
                Storage::delete($request->dImage);
            }
            $validatedData['gambar2'] = $request->file('gambar2')->store('lapangan-images');
        }

        Lapangan::where('id', $lapangan->id)
                    ->update($validatedData);

        return redirect('/admin/lapangans')->with('success', 'Data lapangan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lapangan $lapangan)
    {
        if($lapangan->thumbnail) {
            Storage::delete($lapangan->thumbnail);
        }
        if($lapangan->gambar1) {
            Storage::delete($lapangan->gambar1);
        }
        if($lapangan->gambar2) {
            Storage::delete($lapangan->gambar2);
        }

        Lapangan::destroy($lapangan->id);

        return redirect('/admin/lapangans')->with('success', 'Data lapangan berhasil dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Lapangan::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
