<?php

use App\Http\Controllers\MejaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', [HomeController::class, 'index']);
Route::resource('/menu', MenuController::class);
Route::resource('/stok', StokController::class);
Route::resource('/meja', MejaController::class);
Route::resource('/pelanggan', PelangganController::class);
Route::resource('/jenis', JenisController::class);
Route::resource('/kategori', KategoriController::class);
Route::resource('/absensi', AbsensiController::class);
Route::resource('/contact_us', ContactUsController::class); 
Route::resource('transaksi',TransaksiController::class);

//export
Route::get('export/menu', [MenuController::class, 'exportData'])->name('export-menu'); 
Route::get('export/jenis', [JenisController::class, 'exportData'])->name('export-jenis'); 
Route::get('export/pelanggan', [PelangganController::class, 'exportData'])->name('export-pelanggan'); 
Route::get('export/stok', [StokController::class, 'exportData'])->name('export-stok'); 
Route::get('export/meja', [MejaController::class, 'exportData'])->name('export-meja'); 

//import
Route::post('import/jenis', [JenisController::class, 'importData'])->name('import-jenis');
Route::post('/menu/import', [MenuController::class , 'import'])->name('menu.importExcel');
Route::post('/stok/import', [StokController::class , 'importData'])->name('Stok-importExcel');
Route::post('/meja/import', [MejaController::class , 'importData'])->name('Meja-importExcel');
Route::post('/pelanggan/import', [PelangganController::class , 'importData'])->name('Pelanggan-importExcel');