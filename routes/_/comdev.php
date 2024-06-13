<?php

// use App\Http\Controllers\Comdev\DokumenController;
// use App\Http\Controllers\Comdev\DokumentasiController;

// use SiteSkController;
// use App\Http\Controllers\Comdev\LaporanController;
use Illuminate\Support\Facades\Route;
use App\Models\comdev\Dokumentasi\Dokumentasi;
use App\Http\Controllers\Comdev\Peta\PetaController;
use App\Http\Controllers\Comdev\site_sk\TpomController;
use App\Http\Controllers\Comdev\Dokumen\DokumenController;
use App\Http\Controllers\comdev\laporan\LaporanController;
use App\Http\Controllers\Comdev\site_sk\KarhutlaController;
use App\Http\Controllers\Comdev\site_sk\MangroveController;
use App\Http\Controllers\Comdev\site_sk\RangkongController;
use App\Http\Controllers\Comdev\site_sk\BangusmanController;
use App\Http\Controllers\Comdev\site_sk\PerikananController;
use App\Http\Controllers\Comdev\site_sk\PertanianController;
use App\Http\Controllers\Comdev\site_pgsb\PgsbTpomController;
use App\Http\Controllers\Comdev\dashboard\DashboardController;
use App\Http\Controllers\Comdev\site_tnb\TnbPerikananController;
use App\Http\Controllers\Comdev\site_tnb\TnbPertanianController;
use App\Http\Controllers\Comdev\site_pgsb\PgsbMangroveController;
use App\Http\Controllers\Comdev\site_tnb\TnbKapalsayurController;
use App\Http\Controllers\Comdev\Dokumentasi\DokumentasiController;
use App\Http\Controllers\Comdev\site_pgsb\PgsbPerikananController;
use App\Http\Controllers\Comdev\site_pgsb\PgsbPertanianController;
use App\Http\Controllers\Comdev\site_tnb\TnbProduksitebuController;
// use App\Http\Controllers\Comdev\laporan\LaporanController as LaporanLaporanController;

// Route::redirect('/', 'site-sk');
// Route::get('site-sk', SiteSkController::class);
Route::redirect('/', 'site_sk/pertanian');
Route::resource('site_sk/pertanian', PertanianController::class);
Route::controller(PertanianController::class)->group(function(){
    Route::get('comdev/site_sk/pertanian', 'batal');
});

Route::redirect('/', 'site_sk/perikanan');
Route::resource('site_sk/perikanan', PerikananController::class);
Route::controller(PerikananController::class)->group(function(){
    Route::get('comdev/site_sk/perikanan', 'batal');

});
Route::redirect('/', 'site_sk/karhutla');
Route::resource('site_sk/karhutla', KarhutlaController::class);
Route::controller(KarhutlaController::class)->group(function(){
    Route::get('comdev/site_sk/karhutla', 'batal');


Route::redirect('/', 'site_sk/mangrove');
Route::resource('site_sk/mangrove', MangroveController::class);
Route::controller(MangroveController::class)->group(function(){
        Route::get('comdev/site_sk/mangrove', 'batal');
});

Route::redirect('/', 'site_sk/rangkong');
Route::resource('site_sk/rangkong', RangkongController::class);
Route::controller(RangkongController::class)->group(function(){
Route::get('comdev/site_sk/rangkong', 'batal');
});


});
Route::redirect('/', 'site_sk/tpom');
Route::resource('site_sk/tpom', TpomController::class);
Route::controller(TpomController::class)->group(function(){
    Route::get('comdev/site_sk/tpom', 'batal');
});

Route::redirect('/', 'site_sk/bangusman');
Route::resource('site_sk/bangusman', BangusmanController::class);
Route::controller(BangusmanController::class)->group(function(){
    Route::get('comdev/site_sk/bangusman', 'batal');
});

// site tnb//

Route::redirect('/', 'site_tnb/pertanian');
Route::resource('site_tnb/pertanian', TnbPertanianController::class);
Route::controller(TnbPertanianController::class)->group(function(){
    Route::get('comdev/site_tnb/pertanian', 'batal');
});

Route::redirect('/', 'site_tnb/perikanan');
Route::resource('site_tnb/perikanan', TnbPerikananController::class);
Route::controller(TnbPerikananController::class)->group(function(){
    Route::get('comdev/site_tnb/perikanan', 'batal');
});

Route::redirect('/', 'site_tnb/kapalsayur');
Route::resource('site_tnb/kapalsayur', TnbKapalsayurController::class);
Route::controller(TnbKapalsayurController::class)->group(function(){
    Route::get('comdev/site_tnb/kapalsayur', 'batal');
});

Route::redirect('/', 'site_tnb/produksitebu');
Route::resource('site_tnb/produksitebu', TnbProduksitebuController::class);
Route::controller(TnbProduksitebuController::class)->group(function(){
    Route::get('comdev/site_tnb/produksitebu', 'batal');
});

// site PGSB //
Route::redirect('/', 'site_pgsb/pertanian');
Route::resource('site_pgsb/pertanian', PgsbPertanianController::class);
Route::controller(PgsbPertanianController::class)->group(function(){
    Route::get('comdev/site_pgsb/pertanian', 'batal');
});

Route::redirect('/', 'site_pgsb/perikanan');
Route::resource('site_pgsb/perikanan', PgsbPerikananController::class);
Route::controller(PgsbPerikananController::class)->group(function(){
    Route::get('comdev/site_pgsb/perikanan', 'batal');
});

Route::redirect('/', 'site_pgsb/mangrove');
Route::resource('site_pgsb/mangrove', PgsbMangroveController::class);
Route::controller(PgsbMangroveController::class)->group(function(){
    Route::get('comdev/site_pgsb/mangrove', 'batal');
});

Route::redirect('/', 'site_pgsb/tpom');
Route::resource('site_pgsb/tpom', PgsbTpomController::class);
Route::controller(PgsbTpomController::class)->group(function(){
    Route::get('comdev/site_sk/tpom', 'batal');
});

// akhir site pgsb//

Route::redirect('/', 'dokumentasi');
Route::resource('dokumentasi', DokumentasiController::class);
Route::controller(DokumentasiController::class)->group(function(){
    Route::get('comdev/dokumentasi', 'batal');
});

Route::redirect('/', 'dokumen');
Route::resource('dokumen', DokumenController::class);
Route::controller(DokumenController::class)->group(function(){
    Route::get('comdev/dokumen', 'batal');
});

Route::redirect('/', 'peta');
Route::resource('peta', PetaController::class);
Route::controller(PetaController::class)->group(function(){
    Route::get('comdev/peta', 'batal');
});


Route::redirect('/', 'comdev/laporan');
Route::resource('laporan', LaporanController::class);
Route::controller(LaporanController::class)->group(function(){
    Route::get('comdev/laporan', 'batal');
});



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



