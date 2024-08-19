<?php


// use App\Http\Controllers\Comdev\LaporanController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Biodivview\SurveiController;
use App\Http\Controllers\Biodivview\LaporanController;
use App\Http\Controllers\biodivview\OrangutanController;
use App\Http\Controllers\Biodivview\DokumentasiController;
use App\Http\Controllers\Biodivview\AntropogenikController;
use App\Http\Controllers\Biodivview\dashboard\DashboardController;

Route::redirect('/', 'biodivview/antropogenik');
Route::get('antropogenik', [AntropogenikController::class, 'index']);

Route::redirect('/', 'biodivview/survei');
Route::get('survei', [SurveiController::class, 'index']);

Route::redirect('/', 'biodivview/orangutan');
Route::get('orangutan', [OrangutanController::class, 'index']);

Route::redirect('/', 'biodivview/dokumentasi');
Route::get('dokumentasi', [DokumentasiController::class, 'index']);

Route::redirect('/', 'biodivview/laporan');
Route::get('laporan', [LaporanController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');