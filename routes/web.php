<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LearnmoreController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\LoginmanualController;
use App\Http\Controllers\ShopcatalogController;
use App\Http\Controllers\ShopdetailsController;

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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/learnmore', [LearnmoreController::class, 'index']);

Route::get('/login', function () {
    return view('login.index');
})->name('login')->middleware(['guest']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/shop', [ShopcatalogController::class, 'index'])
    ->middleware(['auth']);

Route::get('/shopdetails', [ShopdetailsController::class, 'index'])
    ->middleware(['auth']);

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
