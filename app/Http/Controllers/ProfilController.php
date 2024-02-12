<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil', [
            "title" => "COURTIFY - Profile"
        ]);
    }

    // public function updateProfile(Request $request)
    // {
    //     $validated = Validator::make($request->all(), [
    //         'name' => ['required', 'string', 'max:255'],
    //         'phone' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'max:255'],
    //     ]);
        
    //     if ($validated->fails()) {
    //         return response()->json(['code' => 400, 'msg' => $validated->errors()->first()]);
    //     }

    //     # update the user info
    //     auth()->user()->update([
    //         'name' => $request->name,
    //         'phone' => $request->phone,
    //         'email' => $request->email,
    //     ]);
    //     return response()->json(['code' => 200, 'msg' => 'profile updated successfully.']);
    // }
}

