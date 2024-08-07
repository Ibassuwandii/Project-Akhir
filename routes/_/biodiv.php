<?php


// use App\Http\Controllers\Comdev\LaporanController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\biodiv\survei\SurveiController;
use App\Http\Controllers\biodiv\laporan\LaporanController;
use App\Http\Controllers\Comdev\Dokumen\DokumenController;
use App\Http\Controllers\biodiv\orangutan\OrangutanController;
use App\Http\Controllers\biodiv\dashboard\DashboardController;
use App\Http\Controllers\Comdev\Dokumentasi\DokumentasiController;
use App\Http\Controllers\biodiv\antropogenik\AntropogenikController;
// use App\Http\Controllers\Comdev\laporan\LaporanController as LaporanLaporanController;


Route::redirect('/', 'dokumentasi');
Route::resource('dokumentasi', DokumentasiController::class);
Route::controller(DokumentasiController::class)->group(function () {
    Route::get('comdev/dokumentasi', 'batal');
});

Route::redirect('/', 'dokumen');
Route::resource('dokumen', DokumenController::class);
Route::controller(DokumenController::class)->group(function () {
    Route::get('comdev/dokumen', 'batal');
});

Route::redirect('/', 'biodiv/survei');
Route::resource('survei', SurveiController::class);
Route::controller(SurveiController::class)->group(function () {
    Route::get('biodiv/survei', 'batal');
});

Route::redirect('/', 'biodiv/antropogenik');
Route::resource('antropogenik', AntropogenikController::class);
Route::controller(AntropogenikController::class)->group(function () {
    Route::get('biodiv/antropogenik', 'batal');
});

Route::redirect('/', 'biodiv/orangutan');
Route::resource('orangutan', OrangutanController::class);
Route::controller(OrangutanController::class)->group(function () {
    Route::get('biodiv/orangutan', 'batal');
});

Route::redirect('/', 'biodiv/laporan');
Route::resource('laporan', LaporanController::class);
Route::controller(LaporanController::class)->group(function () {
    Route::get('biodiv/laporan', 'batal');
});




Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');