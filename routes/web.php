<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SucceedController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LearnmoreController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\ShopcatalogController;
use App\Http\Controllers\ShopdetailsController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardLapanganController;
use App\Http\Controllers\DashboardPertanyaanController;

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
Route::middleware(['guest'])->group(function(){
    Route::get('/login', [LoginController::class, 'index'])
        ->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    // Untuk redirect ke Google
    Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])
        ->name('redirect');
    // Untuk callback dari Google
    Route::get('login/google/callback', [SocialiteController::class, 'callback'])
        ->name('callback');
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::get('home', function(){
    return redirect('/');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/shop', [ShopcatalogController::class, 'index']);
    Route::get('/shopdetails', [ShopdetailsController::class, 'index']);
    Route::get('/profile', [ProfilController::class, 'index']);
    Route::get('/dashboard', [DashboardUserController::class, 'index']);
    Route::get('/keranjang', [KeranjangController::class, 'index']);
    Route::get('/checkout', [CheckoutController::class, 'index']);
    Route::get('/succeed', [SucceedController::class, 'index']);
    Route::get('/admin', [DashboardAdminController::class, 'index'])->middleware('userAkses:admin');
    Route::resource('/admin/lapangan', DashboardLapanganController::class)->middleware('userAkses:admin');
    Route::get('/admin/pertanyaan', [DashboardPertanyaanController::class, 'index'])->middleware('userAkses:admin');
    // Untuk logout
    Route::get('logout', [SocialiteController::class, 'logout'])
        ->name('logout');
});

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/learnmore', [LearnmoreController::class, 'index']);









