<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Edukasi\Peta\PetaController;
use App\Http\Controllers\Edukasi\Dokumen\DokumenController;
use App\Http\Controllers\Edukasi\laporan\LaporanController;
use App\Http\Controllers\Edukasi\TamanBaca\TamanBacaController;
use App\Http\Controllers\edukasi\Dokumentasi\DokumentasiController;



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
