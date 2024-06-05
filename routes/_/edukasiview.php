<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Edukasiview\PetaController;
use App\Http\Controllers\Edukasiview\DokumenController;
use App\Http\Controllers\Edukasiview\LaporanController;
use App\Http\Controllers\Edukasiview\DokumentasiController;

Route::redirect('/', 'edukasiview/dokumen');
Route::get('dokumen', [DokumenController::class, 'index']);

Route::redirect('/', 'edukasiview/peta');
Route::get('peta', [PetaController::class, 'index']);

Route::redirect('/', 'edukasiview/dokumentasi');
Route::get('dokumentasi', [DokumentasiController::class, 'index']);

Route::redirect('/', 'edukasiview/laporan');
Route::get('laporan', [LaporanController::class, 'index']);

