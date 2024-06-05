<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



Route::get('check-role', [AuthController::class, 'checkRole']);

// rote admin//
Route::middleware('auth')->group(function(){
    Route::prefix('admin')
        ->middleware('can:yiari-admin')
        ->group(function(){
            include "_/admin.php";
    });

});
// akhir admin//


// route comdevv//
Route::middleware('auth')->group(function(){
    Route::prefix('comdev')
        ->middleware('can:divisi-comdev')
        ->group(function(){
            include "_/comdev.php";
    });
});
// akhir conmdev//


// route divisi edukasi//
Route::middleware('auth')->group(function(){
    Route::prefix('edukasi')
        ->middleware('can:divisi-edukasi')
        ->group(function(){
            include "_/edukasi.php";
    });
});
//akhir route divisi edukasi//


// rote comdevview//
Route::middleware('auth')->group(function(){
    Route::prefix('comdevview')
        ->middleware('can:divisi-comdevview')
        ->group(function(){
        include "_/comdevview.php";
    });
});
// akhir comdevview//


Route::middleware('auth')->group(function(){
    Route::prefix('edukasiview')
        ->middleware('can:divisi-edukasiview')
        ->group(function(){
        include "_/edukasiview.php";
    });
});


Route::middleware(['checkRole:admin'])->group(function () {
    // Rute yang memerlukan peran 'admin'
    Route::get('/admin/dashboard', [AuthController::class, 'dashboard']);
    Route::get('/admin/users', [AuthController::class, 'users']);
});
