<?php

use Illuminate\Support\Facades\Route;

// site sk//
Route::prefix('comdev')->group(function () {
    include "comdev.php";
});

Route::prefix('pertanian')->group(function () {
    include "comdev.php";
});

Route::prefix('perikanan')->group(function () {
    include "comdev.php";
});
Route::prefix('tpom')->group(function () {
    include "comdev.php";
});

Route::prefix('karhutla')->group(function () {
    include "comdev.php";
});

Route::prefix('mangrove')->group(function () {
    include "comdev.php";
});

Route::prefix('bangusman')->group(function () {
    include "comdev.php";
});


// akhir site sk//


// site tnb //

Route::prefix('kapalsayur')->group(function () {
    include "comdev.php";
});

Route::prefix('produksitebu')->group(function () {
    include "comdev.php";
});

// // akhir site tnb //

Route::prefix('dokumentasi')->group(function () {
    include "comdev.php";
});

Route::prefix('peta')->group(function () {
    include "comdev.php";
});

Route::prefix('laporan')->group(function () {
    include "comdev.php";
});


// Route Divisi Edukasi//

Route::prefix('edukasi')->group(function () {
    include "edukasi.php";
});

Route::prefix('dokumentasi')->group(function () {
    include "edukasi.php";
});

Route::prefix('dokumen')->group(function () {
    include "edukasi.php";
});


Route::prefix('laporan')->group(function () {
    include "edukasi.php";
});


Route::prefix('peta')->group(function () {
    include "edukasi.php";
});



// comdevview//
Route::prefix('pertanian')->group(function () {
    include "comdevview.php";
});

Route::prefix('perikanan')->group(function () {
    include "comdevview.php";
});

Route::prefix('mangrove')->group(function () {
    include "comdevview.php";
});










