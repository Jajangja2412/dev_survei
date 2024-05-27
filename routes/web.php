<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/* =======================================================================*/
/* ========================== Halaman Login  =========================*/
/* =======================================================================*/
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
/* =======================================================================*/
/* ========================== Halaman Login  =========================*/
/* =======================================================================*/

Route::get('/beranda', [BerandaController::class, 'index'])->name('index');
Route::get('/layanan_dosen_tendik', [BerandaController::class, 'ldtk'])->name('ldtk');
Route::post('/simpan-ldtk', [BerandaController::class, 'simpan_ldtk'])->name('simpan_ldtk');

Route::get('/', function () {
    return view('login.index');
});
