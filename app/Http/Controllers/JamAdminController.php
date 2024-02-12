<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JamAdminController extends Controller
{
    public function index()
    {
        $jam = [
            '06:00-07:00',
            '07:00-08:00',
            '08:00-09:00',
            '09:00-10:00',
            '10:00-11:00',
            '11:00-12:00',
            '12:00-13:00',
            '13:00-14:00',
            '14:00-15:00',
            '15:00-16:00',
            '16:00-17:00'
        ];

        $aktif = [
            '06:00-07:00',
            '07:00-08:00',
            '08:00-09:00',
            '09:00-10:00',
            '10:00-11:00',
            '11:00-12:00',
            '13:00-14:00',
            '14:00-15:00',
            '15:00-16:00',
            '16:00-17:00'
        ];

        return view('admin.lapangan.jamoperasional', [
            "title" => "COURTIFY - Dashboard Jam Operasional",
        ], compact('jam', 'aktif'));
    }
}
