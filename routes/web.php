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

Route::middleware('is_admin')->group(function () {

    // Kelola Informasi --------------------------------------------------------------------------------------------------------------------
    Route::get('/kelolaInformasi', [App\Http\Controllers\kelolaInformasiController::class, 'index'])->name('kelolaInformasi');

    // Kelola Pendaftaran ------------------------------------------------------------------------------------------------------------------
    Route::get('/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'index'])->name('pendaftaran');
    Route::post('/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'daftar'])->name('pendaftaran');

    // Kelola Informasi --------------------------------------------------------------------------------------------------------------------
    Route::patch('/kelolaPendaftaran', [App\Http\Controllers\kelolaPendaftaranController::class, 'edit'])->name('editModal');
    Route::patch('admin/kelolaPendaftaran', [App\Http\Controllers\kelolaPendaftaranController::class, 'delete'])->name('delete');
    Route::get('admin/kelolaPendaftaran', [App\Http\Controllers\kelolaPendaftaranController::class, 'index'])->name('kelolaPendaftaran');
    Route::get('admin/ajaxadmin/dataPendaftar/{id}', [App\Http\Controllers\kelolaPendaftaranController::class, 'getDataPendaftar']);

    Route::get('/Laporan', [App\Http\Controllers\LaporanController::class, 'index'])->name('Laporan');

});
