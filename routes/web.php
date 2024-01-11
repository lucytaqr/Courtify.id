<?php

use App\Http\Controllers\SocialiteController;
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

Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/learnmore', function () {
    return view('learnmore');
});

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware(['guest']);

Route::get('/shop', function () {
    return view('shopcatalog');
})->middleware(['auth']);

Route::get('/shopdetails', function () {
    return view('shopdetails');
})->middleware(['auth']);

// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])
    ->middleware(['guest'])
    ->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])
    ->middleware(['guest'])
    ->name('callback');

// Untuk logout
Route::get('logout', [SocialiteController::class, 'logout'])
    ->middleware(['auth'])
    ->name('logout');
