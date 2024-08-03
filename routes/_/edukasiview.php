<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Edukasiview\PetaController;
use App\Http\Controllers\Edukasiview\DokumenController;
use App\Http\Controllers\Edukasiview\LaporanController;
use App\Http\Controllers\Edukasiview\DashboardController;
use App\Http\Controllers\Edukasiview\InstagramController;
use App\Http\Controllers\Edukasiview\TamanbacaController;
use App\Http\Controllers\Edukasiview\AksisampahController;
use App\Http\Controllers\Edukasiview\DokumentasiController;
use App\Http\Controllers\Edukasiview\VisitschoolController;


Route::redirect('/', 'edukasiview/dokumen');
Route::get('dokumen', [DokumenController::class, 'index']);

Route::redirect('/', 'edukasiview/peta');
Route::get('peta', [PetaController::class, 'index']);

Route::redirect('/', 'edukasiview/dokumentasi');
Route::get('dokumentasi', [DokumentasiController::class, 'index']);

Route::redirect('/', 'edukasiview/laporan');
Route::get('laporan', [LaporanController::class, 'index']);

Route::redirect('/', 'edukasiview/aksisampah');
Route::get('aksisampah', [AksisampahController::class, 'index']);

Route::redirect('/', 'edukasiview/instagram');
Route::get('instagram', [InstagramController::class, 'index']);

Route::redirect('/', 'edukasiview/visitschool');
Route::get('visitschool', [VisitschoolController::class, 'index']);

Route::redirect('/', 'edukasiview/tamanbaca');
Route::get('tamanbaca', [TamanbacaController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


