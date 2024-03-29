<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SucceedController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DataSewaController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\ShopcatalogController;
use App\Http\Controllers\KetersediaanController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardAdminController;
use App\Models\Cabor;
use App\Models\Lapangan;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JamAdminController;



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

Route::middleware(['guest'])->group(function () {
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

Route::get('home', function () {
    return redirect('/');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/shop', [ShopcatalogController::class, 'index']);
    Route::get('/shop/{lapangan:slug}', [ShopcatalogController::class, 'show']);
    Route::get('/profile', [ProfilController::class, 'index']);
    Route::get('/dashboard', [DashboardUserController::class, 'index']);
    Route::get('/keranjang', [KeranjangController::class, 'index']);
    Route::get('/ketersediaan', [KetersediaanController::class, 'index']);
    Route::post('/ketersediaan', [KetersediaanController::class, 'store']);
    // Route::post('/ketersediaan/{id}', [KetersediaanController::class, 'addBookingtoCart'])->name('addbooking.to.cart');

    
    Route::get('/checkout', [CheckoutController::class, 'index']);
    Route::get('/succeed', [SucceedController::class, 'index']);
    Route::get('/admin', [DashboardAdminController::class, 'index'])->middleware('userAkses:admin');  
    Route::get('/admin/lapangans/checkSlug', [LapanganController::class, 'checkSlug'])->middleware('userAkses:admin');
    Route::resource('/admin/lapangans', LapanganController::class)->middleware('userAkses:admin');
    Route::get('/admin/jamoperasional', [JamAdminController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/admin/pertanyaan', [PertanyaanController::class, 'index'])->middleware('userAkses:admin');
    Route::resource('/admin/datauser', DataUserController::class)->middleware('userAkses:admin');
    Route::resource('/admin/datasewa', DataSewaController::class)->middleware('userAkses:admin');
    // Untuk logout
    Route::get('logout', [SocialiteController::class, 'logout'])
        ->name('logout');
});


Route::post('/contact/post', [PertanyaanController::class, 'store'])->name('contact.post');

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/learnmore', [HomeController::class, 'learnmore']);
Route::get('/contact', [PertanyaanController::class, 'index']);
