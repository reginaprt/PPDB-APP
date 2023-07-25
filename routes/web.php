<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\kelolaInformasiController;
use App\Http\Controllers\kelolaPendaftaranController;


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
    return view('landingpage');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

// Route Siswa -----------------------------------------------------------------------------------------------------------------------------
Route::middleware('auth')->group(function () {

    // Kelola Pendaftaran ------------------------------------------------------------------------------------------------------------------
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
    Route::post('/pendaftaran', [PendaftaranController::class, 'daftar'])->name('pendaftaran');

});

// Route Admin -----------------------------------------------------------------------------------------------------------------------------
Route::middleware('is_admin')->group(function () {

    // Kelola Informasi --------------------------------------------------------------------------------------------------------------------
    Route::get('/kelolaInformasi', [kelolaInformasiController::class, 'index'])->name('kelolaInformasi');

    // Kelola Pendaftaran ------------------------------------------------------------------------------------------------------------------
    Route::get('admin/kelolaPendaftaran', [kelolaPendaftaranController::class, 'index'])->name('kelolaPendaftaran');
    Route::post('admin/kelolaPendaftaran/add', [kelolaPendaftaranController::class, 'tambah'])->name('tambahPendaftaran');
    Route::patch('admin/kelolaPendaftaran/edit', [kelolaPendaftaranController::class, 'edit'])->name('editPendaftaran');
    Route::get('admin/kelolaPendaftaran/delete/{id}', [kelolaPendaftaranController::class,'delete'])->name('deletePendaftaran');
    Route::get('admin/ajaxadmin/dataPendaftar/{id}', [kelolaPendaftaranController::class, 'getDataPendaftar']);

    // Verifikasi Pendaftaran --------------------------------------------------------------------------------------------------------------
    Route::get('admin/kelolaPendaftaran/terima/{id}', [kelolaPendaftaranController::class,'terima'])->name('terimaPendaftaran');
    Route::get('admin/kelolaPendaftaran/tolak/{id}', [kelolaPendaftaranController::class,'tolak'])->name('tolakPendaftaran');

    // Export Data Pendaftaran -------------------------------------------------------------------------------------------------------------
    Route::get('/admin/kelolaPendaftaran/export/{id}', [kelolaPendaftaranController::class, 'exportPendaftaran'])->name('export.pendaftaran.pdf');

    // Laporan Pendaftaran -----------------------------------------------------------------------------------------------------------------
    Route::get('/Laporan', [LaporanController::class, 'index'])->name('Laporan');
    Route::get('/laporan/export/all', [LaporanController::class, 'exportLaporanAll']);
    Route::get('/laporan/export/lulus', [LaporanController::class, 'exportLaporanLulus']);
    Route::get('/laporan/export/tdklulus', [LaporanController::class, 'exportLaporanTdkLulus']);
    Route::get('/laporan/export/excel', [LaporanController::class, 'export']);
    Route::get('users/export/', [LaporanController::class, 'export']);

});
