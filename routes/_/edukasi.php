<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Edukasi\Peta\PetaController;
use App\Http\Controllers\Edukasi\Dokumen\DokumenController;
use App\Http\Controllers\Edukasi\laporan\LaporanController;
use App\Http\Controllers\Edukasi\Dashboard\DashboardController;
use App\Http\Controllers\edukasi\Instagram\InstagramController;
use App\Http\Controllers\Edukasi\TamanBaca\TamanBacaController;
use App\Http\Controllers\edukasi\Aksisampah\AksisampahController;
use App\Http\Controllers\edukasi\Dokumentasi\DokumentasiController;
use App\Http\Controllers\edukasi\Visitschool\VisitschoolController;



Route::redirect('/','edukasi/taman-baca');
Route::get('taman-baca', TamanBacaController::class);



Route::redirect('/', 'edukasi/laporan');
Route::resource('laporan', LaporanController::class);
Route::controller(LaporanController::class)->group(function(){
    Route::get('edukasi/laporan', 'batal');
});

Route::redirect('/', 'edukasi/peta');
Route::resource('peta', PetaController::class);
Route::controller(PetaController::class)->group(function(){
    Route::get('edukasi/peta', 'batal');
});

Route::redirect('/', 'edukasi/dokumen');
Route::resource('dokumen', DokumenController::class);
Route::controller(DokumenController::class)->group(function(){
    Route::get('edukasi/dokumen', 'batal');
});

Route::redirect('/', 'edukasi/dokumentasi');
Route::resource('dokumentasi', DokumentasiController::class);
Route::controller(DokumentasiController::class)->group(function(){
    Route::get('edukasi/dokumentasi', 'batal');
});

Route::redirect('/', 'edukasi/aksisampah');
Route::resource('aksisampah', AksisampahController::class);
Route::controller(AksisampahController::class)->group(function(){
    Route::get('edukasi/aksisampah', 'batal');
});

Route::redirect('/', 'edukasi/visitschool');
Route::resource('visitschool', VisitschoolController::class);
Route::controller(VisitschoolController::class)->group(function(){
    Route::get('edukasi/visitschool', 'batal');
});

Route::redirect('/', 'edukasi/instagram');
Route::resource('instagram', InstagramController::class);
Route::controller(InstagramController::class)->group(function(){
    Route::get('edukasi/instagram', 'batal');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
