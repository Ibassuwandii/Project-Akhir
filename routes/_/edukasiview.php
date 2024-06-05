<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Edukasiview\DokumenController;

Route::redirect('/', 'edukasiview/dokumen');

Route::get('dokumen', [DokumenController::class, 'index']);
