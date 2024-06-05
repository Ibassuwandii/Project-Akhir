<?php

use App\Http\Controllers\Admin\MasterData\ModuleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasterData\PegawaiController;


Route::redirect('/', 'admin/master-data/pegawai');
Route::resource('master-data/pegawai', PegawaiController::class);
Route::post('/admin/master-data/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::controller(PegawaiController::class)->group(function(){
    Route::get('admin/master-data/pegawai', 'batal');
});

Route::post('master-data/module/add-role', [ModuleController::class, 'addRole']);
Route::get('master-data/module/delete-role/{role}', [ModuleController::class, 'deleteRole']);
Route::resource('master-data/module', ModuleController::class);
Route::controller(ModuleController::class)->group(function(){
    Route::get('admin/master-data/module', 'batal');
});



