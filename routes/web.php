<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return view('welcome');
}); 

Route::get('/',function () {
    return view('home');
});

Route::get('/learnmore',function () {
    return view('learnmore');
});

Route::get('/login',function () {
    return view('login');
});

Route::get('/shop',function () {
    return view('shopcatalog');
});

