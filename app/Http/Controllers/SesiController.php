<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    function index()
    {
        return view('login.index');
    }

    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required' =>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);
    }


}
