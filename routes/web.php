<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WaliController;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\KartuSppController;
use App\Http\Controllers\WaliSiswaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BankSekolahController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\BerandaSiswaController;
use App\Http\Controllers\BerandaPetugasController;
use App\Http\Controllers\WaliMuridSiswaController;
use App\Http\Controllers\KwitansiPembayaranController;
use App\Http\Controllers\WaliMuridTagihanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing-page-new');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('petugas')->middleware(['auth', 'auth.petugas'])->group(function () {
    //ini route untuk petugas
    Route::get('beranda', [BerandaPetugasController::class, 'index'])->name('petugas.beranda');
});

Route::prefix('siswa')->middleware(['auth', 'auth.siswa'])->group(function () {
    //ini route untuk siswa
    Route::get('beranda', [BerandaSiswaController::class, 'index'])->name('siswa.beranda');
    Route::resource('siswawali', WaliMuridSiswaController::class);
    Route::resource('tagihans', WaliMuridTagihanController::class);
});

Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    //ini route untuk admin
    Route::get('beranda', [BerandaAdminController::class, 'index'])->name('admin.beranda');
    Route::resource('banksekolah', BankSekolahController::class);
    Route::resource('user', UserController::class);
    Route::resource('wali' , WaliController::class);
    Route::resource('siswa' , SiswaController::class);
    Route::resource('walisiswa' , WaliSiswaController::class);
    Route::resource('biaya' , BiayaController::class);
    Route::resource('tagihan' , TagihanController::class);
    Route::resource('pembayaran' , PembayaranController ::class);
    Route::get('kwitansi-pembayaran/{id}', [KwitansiPembayaranController::class, 'show'])->name('kwitansipembayaran.show');
    Route::get('kartuspp', [KartuSppController::class, 'index'])->name('kartuspp.index');
});

Route::get('login-wali', [LoginController::class, 'showLoginFormWali'])->name('login.wali');

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');