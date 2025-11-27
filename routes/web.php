<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\LaporanController;

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
Route::get('/', function () {
    return view('login.index');
});

/* =======================================================================*/
/* ========================== Halaman Login  =========================*/
/* =======================================================================*/
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
/* =======================================================================*/
/* ========================== Halaman Login  =========================*/
/* =======================================================================*/
Route::middleware(['auth'])->group(function () {

    Route::get('/beranda', [BerandaController::class, 'index'])->name('index');
    Route::get('/layanan_dosen_tendik', [BerandaController::class, 'ldtk'])->name('ldtk');
    Route::post('/simpan-ldtk', [BerandaController::class, 'simpan_ldtk'])->name('simpan_ldtk');
    Route::get('/visi-misi', [BerandaController::class, 'visimisi'])->name('visimisi');
    Route::post('/simpan-vm', [BerandaController::class, 'simpan_vm'])->name('simpan_vm');
    Route::get('/buka-tutup-vm', [BerandaController::class, 'buka_tutup_vm'])->name('buka_tutup_vm');
    Route::post('/update_buka_tutup', [BerandaController::class, 'update_buka_tutup'])->name('update_buka_tutup');
    Route::get('/survei-lppm', [BerandaController::class, 'survei_lppm'])->name('survei_lppm');
    Route::post('/simpan-lppm', [BerandaController::class, 'simpan_lppm'])->name('simpan_lppm');
    Route::get('/survei-spsdm', [BerandaController::class, 'survei_spsdm'])->name('survei_spsdm');
    Route::post('/simpan-spsdm', [BerandaController::class, 'simpan_spsdm'])->name('simpan_spsdm');

/* =======================================================================*/
/* ========================== Halaman akses  =========================*/
/* =======================================================================*/  

    Route::get('/akses-riset', [BerandaController::class, 'akses_riset'])->name('akses_riset');
    Route::delete('/riset/{nip}', [BerandaController::class, 'destroy'])->name('riset.destroy');
    Route::get('/tambah-riset', [BerandaController::class, 'tambah_riset'])->name('tambah_riset');
    Route::post('/simpan-akses-riset', [BerandaController::class, 'store'])->name('store');


/* =======================================================================*/
/* ========================== Download data  =========================*/
/* =======================================================================*/  

    Route::get('/data-vm', [BerandaController::class, 'data_vm'])->name('data_vm');
    Route::get('/data-ldtk', [BerandaController::class, 'data_ldtk'])->name('data_ldtk');
    Route::get('/data-lppm', [BerandaController::class, 'data_lppm'])->name('data_lppm');
    Route::get('/data-spsdm', [BerandaController::class, 'data_spsdm'])->name('data_spsdm');

    Route::delete('/hapus_survei_vm/{nip}', [BerandaController::class, 'hapus_survei_vm'])->name('hapus_survei_vm');
    Route::post('/proses_backup_vm', [BerandaController::class, 'proses_backup_vm'])->name('proses_backup_vm');

    Route::delete('/hapus_survei_ldtk/{nip}', [BerandaController::class, 'hapus_survei_ldtk'])->name('hapus_survei_ldtk');
    Route::post('/proses_backup_ldtk', [BerandaController::class, 'proses_backup_ldtk'])->name('proses_backup_ldtk');

    Route::delete('/hapus_survei_lppm/{nip}', [BerandaController::class, 'hapus_survei_lppm'])->name('hapus_survei_lppm');
    Route::post('/proses_backup_lppm', [BerandaController::class, 'proses_backup_lppm'])->name('proses_backup_lppm');

    Route::delete('/hapus_survei_spsdm/{nip}', [BerandaController::class, 'hapus_survei_spsdm'])->name('hapus_survei_spsdm');
    Route::post('/proses_backup_spsdm', [BerandaController::class, 'proses_backup_spsdm'])->name('proses_backup_spsdm');

/* =======================================================================*/
/* ========================== upload data  =========================*/
/* =======================================================================*/  

    Route::get('/upload-survei-vm', [UploadController::class, 'upload_survei_vm'])->name('upload_survei_vm');
    Route::get('/tambah-hasil-survei-vm', [UploadController::class, 'tambah_hasil_survei_vm'])->name('tambah_hasil_survei_vm');
    Route::post('/simpan-hasil-survei-vm', [UploadController::class, 'simpan_hasil_survei_vm'])->name('simpan_hasil_survei_vm');
    Route::delete('/hapus-hasil-survei-vm/{no}', [UploadController::class, 'hapus_hasil_survei_vm'])->name('hapus_hasil_survei_vm');

    Route::get('/upload-survei-ldtk', [UploadController::class, 'upload_survei_ldtk'])->name('upload_survei_ldtk');
    Route::get('/tambah-hasil-survei-ldtk', [UploadController::class, 'tambah_hasil_survei_ldtk'])->name('tambah_hasil_survei_ldtk');
    Route::post('/simpan-hasil-survei-ldtk', [UploadController::class, 'simpan_hasil_survei_ldtk'])->name('simpan_hasil_survei_ldtk');
    Route::delete('/hapus-hasil-survei-ldtk/{no}', [UploadController::class, 'hapus_hasil_survei_ldtk'])->name('hapus_hasil_survei_ldtk');

    Route::get('/upload-survei-lppm', [UploadController::class, 'upload_survei_lppm'])->name('upload_survei_lppm');
    Route::get('/tambah-hasil-survei-lppm', [UploadController::class, 'tambah_hasil_survei_lppm'])->name('tambah_hasil_survei_lppm');
    Route::post('/simpan-hasil-survei-lppm', [UploadController::class, 'simpan_hasil_survei_lppm'])->name('simpan_hasil_survei_lppm');
    Route::delete('/hapus-hasil-survei-lppm/{no}', [UploadController::class, 'hapus_hasil_survei_lppm'])->name('hapus_hasil_survei_lppm');

    Route::get('/upload-survei-spsdm', [UploadController::class, 'upload_survei_spsdm'])->name('upload_survei_spsdm');
    Route::get('/tambah-hasil-survei-spsdm', [UploadController::class, 'tambah_hasil_survei_spsdm'])->name('tambah_hasil_survei_spsdm');
    Route::post('/simpan-hasil-survei-spsdm', [UploadController::class, 'simpan_hasil_survei_spsdm'])->name('simpan_hasil_survei_spsdm');
    Route::delete('/hapus-hasil-survei-spsdm/{no}', [UploadController::class, 'hapus_hasil_survei_spsdm'])->name('hapus_hasil_survei_spsdm');

    Route::get('/upload-survei-lk', [UploadController::class, 'upload_survei_lk'])->name('upload_survei_lk');
    Route::get('/tambah-hasil-survei-lk', [UploadController::class, 'tambah_hasil_survei_lk'])->name('tambah_hasil_survei_lk');
    Route::post('/simpan-hasil-survei-lk', [UploadController::class, 'simpan_hasil_survei_lk'])->name('simpan_hasil_survei_lk');
    Route::delete('/hapus-hasil-survei-lk/{no}', [UploadController::class, 'hapus_hasil_survei_lk'])->name('hapus_hasil_survei_lk');

    Route::get('/upload-survei-edom', [UploadController::class, 'upload_survei_edom'])->name('upload_survei_edom');
    Route::get('/tambah-hasil-survei-edom', [UploadController::class, 'tambah_hasil_survei_edom'])->name('tambah_hasil_survei_edom');
    Route::post('/simpan-hasil-survei-edom', [UploadController::class, 'simpan_hasil_survei_edom'])->name('simpan_hasil_survei_edom');
    Route::delete('/hapus-hasil-survei-edom/{no}', [UploadController::class, 'hapus_hasil_survei_edom'])->name('hapus_hasil_survei_edom');

    Route::match(['get', 'post'], '/vm-lap-survei', [LaporanController::class, 'vm_lap_survei'])->name('vm_lap_survei');
    Route::match(['get', 'post'], '/ldtk-lap-survei', [LaporanController::class, 'ldtk_lap_survei'])->name('ldtk_lap_survei');
    Route::match(['get', 'post'], '/lppm-lap-survei', [LaporanController::class, 'lppm_lap_survei'])->name('lppm_lap_survei');
    Route::match(['get', 'post'], '/spsdm-lap-survei', [LaporanController::class, 'spsdm_lap_survei'])->name('spsdm_lap_survei');
    Route::match(['get', 'post'], '/lk-lap-survei', [LaporanController::class, 'lk_lap_survei'])->name('lk_lap_survei');
    Route::match(['get', 'post'], '/edom-lap-survei', [LaporanController::class, 'edom_lap_survei'])->name('edom_lap_survei');



    Route::get('/upload-pedoman-survei-vm', [UploadController::class, 'upload_pedoman_survei_vm'])->name('upload_pedoman_survei_vm');
    Route::get('/tambah-pedoman-survei-vm', [UploadController::class, 'tambah_pedoman_survei_vm'])->name('tambah_pedoman_survei_vm');
    Route::post('/simpan-pedoman-survei-vm', [UploadController::class, 'simpan_pedoman_survei_vm'])->name('simpan_pedoman_survei_vm');
    Route::delete('/hapus-pedoman-survei-vm/{no}', [UploadController::class, 'hapus_pedoman_survei_vm'])->name('hapus_pedoman_survei_vm');

    Route::get('/upload-pedoman-survei-ldtk', [UploadController::class, 'upload_pedoman_survei_ldtk'])->name('upload_pedoman_survei_ldtk');
    Route::get('/tambah-pedoman-survei-ldtk', [UploadController::class, 'tambah_pedoman_survei_ldtk'])->name('tambah_pedoman_survei_ldtk');
    Route::post('/simpan-pedoman-survei-ldtk', [UploadController::class, 'simpan_pedoman_survei_ldtk'])->name('simpan_pedoman_survei_ldtk');
    Route::delete('/hapus-pedoman-survei-ldtk/{no}', [UploadController::class, 'hapus_pedoman_survei_ldtk'])->name('hapus_pedoman_survei_ldtk');

    Route::get('/upload-pedoman-survei-lppm', [UploadController::class, 'upload_pedoman_survei_lppm'])->name('upload_pedoman_survei_lppm');
    Route::get('/tambah-pedoman-survei-lppm', [UploadController::class, 'tambah_pedoman_survei_lppm'])->name('tambah_pedoman_survei_lppm');
    Route::post('/simpan-pedoman-survei-lppm', [UploadController::class, 'simpan_pedoman_survei_lppm'])->name('simpan_pedoman_survei_lppm');
    Route::delete('/hapus-pedoman-survei-lppm/{no}', [UploadController::class, 'hapus_pedoman_survei_lppm'])->name('hapus_pedoman_survei_lppm');

    Route::get('/upload-pedoman-survei-spsdm', [UploadController::class, 'upload_pedoman_survei_spsdm'])->name('upload_pedoman_survei_spsdm');
    Route::get('/tambah-pedoman-survei-spsdm', [UploadController::class, 'tambah_pedoman_survei_spsdm'])->name('tambah_pedoman_survei_spsdm');
    Route::post('/simpan-pedoman-survei-spsdm', [UploadController::class, 'simpan_pedoman_survei_spsdm'])->name('simpan_pedoman_survei_spsdm');
    Route::delete('/hapus-pedoman-survei-spsdm/{no}', [UploadController::class, 'hapus_pedoman_survei_spsdm'])->name('hapus_pedoman_survei_spsdm');

    Route::get('/upload-pedoman-survei-lk', [UploadController::class, 'upload_pedoman_survei_lk'])->name('upload_pedoman_survei_lk');
    Route::get('/tambah-pedoman-survei-lk', [UploadController::class, 'tambah_pedoman_survei_lk'])->name('tambah_pedoman_survei_lk');
    Route::post('/simpan-pedoman-survei-lk', [UploadController::class, 'simpan_pedoman_survei_lk'])->name('simpan_pedoman_survei_lk');
    Route::delete('/hapus-pedoman-survei-lk/{no}', [UploadController::class, 'hapus_pedoman_survei_lk'])->name('hapus_pedoman_survei_lk');

    Route::get('/upload-pedoman-survei-edom', [UploadController::class, 'upload_pedoman_survei_edom'])->name('upload_pedoman_survei_edom');
    Route::get('/tambah-pedoman-survei-edom', [UploadController::class, 'tambah_pedoman_survei_edom'])->name('tambah_pedoman_survei_edom');
    Route::post('/simpan-pedoman-survei-edom', [UploadController::class, 'simpan_pedoman_survei_edom'])->name('simpan_pedoman_survei_edom');
    Route::delete('/hapus-pedoman-survei-edom/{no}', [UploadController::class, 'hapus_pedoman_survei_edom'])->name('hapus_pedoman_survei_edom');

  
});
