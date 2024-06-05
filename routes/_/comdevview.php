<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Comdevview\PetaController;
use App\Http\Controllers\Comdevview\DokumenController;
use App\Http\Controllers\Comdevview\LaporanController;
use App\Http\Controllers\Comdevview\DokumentasiController;
use App\Http\Controllers\Comdevview\site_sk\PerikananController;
use App\Http\Controllers\Comdevview\site_sk\PertanianController;

Route::redirect('/', 'comdevview/dokumen');
Route::get('dokumen', [DokumenController::class, 'index']);


Route::redirect('/', 'comdevview/peta');
Route::get('peta', [PetaController::class, 'index']);


Route::redirect('/', 'comdevview/dokumentasi');
Route::get('dokumentasi', [DokumentasiController::class, 'index']);


Route::redirect('/', 'comdevview/laporan');
Route::get('laporan', [LaporanController::class, 'index']);


// route site SK//
Route::redirect('/', 'comdevview/site_sk/pertanian');
Route::get('site_sk/pertanian', [PertanianController::class, 'index']);


Route::redirect('/', 'comdevview/site_sk/perikanan');
Route::get('site_sk/perikanan', [PerikananController::class, 'index']);



