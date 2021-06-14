<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresensiController;

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
	return view('welcome');
});

// Login
Route::get('/login', [LoginController::class, 'halamanLogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/postregistrasi', [LoginController::class, 'postRegistrasi'])->name('postregistrasi');


Route::group(["middleware" => ['auth','ceklevel:admin,karyawan']], function (){
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::group(["middleware" => ['auth','ceklevel:karyawan']], function (){
	// Adminlte
	Route::get('/presensi-masuk', [PresensiController::class, 'index'])->name('presensi-masuk');
	Route::get('/presensi-keluar', [PresensiController::class, 'keluar'])->name('presensi-keluar');
	Route::post('/simpan-masuk', [PresensiController::class, 'store'])->name('simpan-masuk');
	Route::post('ubah-presensi', [PresensiController::class, 'presensipulang'])->name('ubah-presensi');
});

Route::group(["middleware" => ['auth','ceklevel:admin']], function (){
	Route::get('filter-data', [PresensiController::class, 'halamanrekap'])->name('filter-data');
	Route::get('filter-data/{tglawal}/{tglakhir}', [PresensiController::class, 'tampildatakeseluruhan'])->name('filter-data-keseluruhan');
});
