<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PembayaranController as AdminPembayaranController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\Admin\BerkasController as AdminBerkasController;
use App\Http\Controllers\OrangTuaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\WawancaraController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/pembayaran', [AdminPembayaranController::class, 'index'])->name('admin-pembayaran.index');

        Route::get('/konfirmasi-pembayaran-{id}', [AdminPembayaranController::class, 'konfirmasi_pembayaran'])->name('admin-pembayaran.konfirmasi-pembayaran');

        Route::put('/batal-pembayaran-{id}', [AdminPembayaranController::class, 'batal_pembayaran'])->name('admin-pembayaran.batal-pembayaran');

        Route::get('/berkas', [AdminBerkasController::class, 'index'])->name('admin-berkas.index');

        Route::get('/konfirmasi-berkas-{id}', [AdminBerkasController::class, 'konfirmasi_berkas'])->name('admin-berkas.konfirmasi-berkas');

        Route::put('/batal-berkas-{id}', [AdminBerkasController::class, 'batal_berkas'])->name('admin-berkas.batal-berkas');

        Route::put('/set-wawancara-{id}', [AdminBerkasController::class, 'set_wawancara'])->name('admin-berkas.set-wawancara');
    });

Route::middleware(['auth'])
    ->group(function() {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        Route::get('/profile/show', [OrangTuaController::class, 'profile'])->name('profile.show');

        Route::put('/profile/update', [OrangTuaController::class, 'update_profile'])->name('profile.update');

        Route::get('/data-anak', [AnakController::class, 'index'])->name('data-anak.index');

        Route::get('/data-anak/tambah-data', [AnakController::class, 'create'])->name('data-anak.create');

        Route::post('/data-anak/tambah-data/kirim-data', [AnakController::class, 'store'])->name('data-anak.store');

        Route::get('/data-anak/ubah-data/{id}', [AnakController::class, 'edit'])->name('data-anak.edit');

        Route::put('/data-anak/ubah-data/{id}/kirim-data', [AnakController::class, 'update'])->name('data-anak.update');

        Route::delete('/data-anak/hapus-data/{id}', [AnakController::class, 'delete'])->name('data-anak.delete');

        Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');

        Route::get('/pembayaran/tambah-data', [PembayaranController::class, 'create'])->name('pembayaran.create');

        Route::post('/pembayaran/tambah-data/kirim-data', [PembayaranController::class, 'store'])->name('pembayaran.store');

        Route::get('/upload-berkas', [BerkasController::class, 'index'])->name('berkas.index');

        Route::get('/upload-berkas/tambah-data', [BerkasController::class, 'create'])->name('berkas.create');

        Route::post('/upload-berkas/tambah-data/kirim-data', [BerkasController::class, 'store'])->name('berkas.store');

        Route::get('/jadwal-wawancara', [WawancaraController::class, 'index'])->name('wawancara.index');

    });

require __DIR__.'/auth.php';
