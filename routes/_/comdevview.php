<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Comdevview\PetaController;
use App\Http\Controllers\Comdevview\DokumenController;
use App\Http\Controllers\Comdevview\LaporanController;
use App\Http\Controllers\Comdevview\DokumentasiController;
use App\Http\Controllers\Comdevview\site_sk\TpomController;
use App\Http\Controllers\Comdevview\site_sk\KarhutlaController;
use App\Http\Controllers\Comdevview\site_sk\MangroveController;
use App\Http\Controllers\Comdevview\site_sk\RangkongController;
use App\Http\Controllers\Comdevview\site_sk\BangusmanController;
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

Route::redirect('/', 'comdevview/site_sk/mangrove');
Route::get('site_sk/mangrove', [MangroveController::class, 'index']);

Route::redirect('/', 'comdevview/site_sk/karhutla');
Route::get('site_sk/karhutla', [KarhutlaController::class, 'index']);

Route::redirect('/', 'comdevview/site_sk/tpom');
Route::get('site_sk/tpom', [TpomController::class, 'index']);

Route::redirect('/', 'comdevview/site_sk/rangkong');
Route::get('site_sk/rangkong', [RangkongController::class, 'index']);

Route::redirect('/', 'comdevview/site_sk/bangusman');
Route::get('site_sk/bangusman', [BangusmanController::class, 'index']);


// site TNB //
Route::redirect('/', 'comdevview/site_tnb/pertanian');
Route::get('site_tnb/pertanian', [PertanianController::class, 'index']);

Route::redirect('/', 'comdevview/site_tnb/perikanan');
Route::get('site_tnb/perikanan', [PerikananController::class, 'index']);



// site PGSB //
Route::redirect('/', 'comdevview/site_pgsb/perikanan');
Route::get('site_pgsb/perikanan', [PerikananController::class, 'index']);

Route::redirect('/', 'comdevview/site_pgsb/pertanian');
Route::get('site_pgsb/pertanian', [PertanianController::class, 'index']);

Route::redirect('/', 'comdevview/site_pgsb/mangrove');
Route::get('site_pgsb/mangrove', [MangroveController::class, 'index']);

Route::redirect('/', 'comdevview/site_pgsb/tpom');
Route::get('site_pgsb/tpom', [TpomController::class, 'index']);
