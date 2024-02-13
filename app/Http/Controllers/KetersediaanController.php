<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class KetersediaanController extends Controller
{
    public function index()
    {
        return view('ketersediaan', [
            "title" => "COURTIFY - Ketersediaan Lapangan",
            "bannerxs" => "Ketersediaan Lapangan"
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
        ]);
    
        Booking::create([
            'nama' => $request->nama,
            'date' => $request->date,
            'time' => $request->time,
        ]);
    
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    // public function addBookingtoCart(Request $request, $id)
    // {
    //     $booking = Booking::findOrFail($id);
    //     $cart = session()->get('cart', []);
    
    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //     } else {
    //         $cart[$id] = [
    //             "nama" => $booking->nama,
    //             "quantity" => 1,
    //             "date" => $booking->date,
    //             "time" => $booking->time
    //         ];
    //     }
    
    //     session()->put('cart', $cart);
    
    //     return redirect()->back()->with('success', 'Booking berhasil ditambahkan ke keranjang!');
    // }
    

}


