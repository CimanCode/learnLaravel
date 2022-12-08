<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\langdingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})
->name('HomePage');

Route::get('/landing', [langdingController::class, "landing"])
      ->prefix('v1')
      ->name('Page');

Route::get('/customer', [langdingController::class, "customer"])->name('customer');
Route::get('/how', [langdingController::class, "how"])->name('how');
Route::get('/name', [langdingController::class, "name"])->name('name');
Route::get('/diagram', [langdingController::class, "diagram"])->name('diagram');
Route::get('/pricing', [langdingController::class, "pricing"])->name('pricing');
Route::get('/testimoni', [langdingController::class, "testimoni"])->name('testimoni');
Route::get('/iklan', [langdingController::class, "iklan"])->name('iklan');

// Route::prefix('v1')->group(function(){
//     Route::get('/landing', [langdingController::class, "landing"])
//     ->name('Page');
// });

Route::get('/template', function () {
    return view('template');
});

Route::get('/home', function () {
    return view('home');
});

Route::prefix("user")->group(function(){
    Route::get("/list", [UserController::class, "index"])->name("user.list");
    Route::get("/detail/{id}", [UserController::class, "detail"])->name("user.detail");
    Route::get("/store", [UserController::class, "store"])->name("user.store");

    Route::post("/create", [UserController::class, "create"])->name("user.create");
    Route::put("/update/{id}", [UserController::class, "update"])->name("user.update");
    Route::get("/delete/{id}", [UserController::class, "destroy"])->name("user.destroy");
});

Route::prefix("siswa")->group(function() {
    Route::get("/list", [SiswaController::class, "index"])->name("siswa.list");
    Route::get("/detail{id}", [SiswaController::class, "detail"])->name("siswa.detail");
    Route::get("/store", [SiswaController::class, "store"])->name("siswa.store");

    Route::post("/create", [SiswaController::class, "create"])->name("siswa.create");
    Route::put("/update/{id}", [SiswaController::class, "update"])->name("siswa.update");
    Route::get("/delete/{id}", [SiswaController::class, "destroy"])->name("siswa.destroy");
});

Route::prefix("sekolah")->group(function() {
    Route::get("/data", [SekolahController::class, "index"])->name("sekolah.data");
    Route::get("/detail{id}", [SekolahController::class, "detail"])->name("sekolah.update");
    Route::get("/store", [SekolahController::class, "store"])->name("sekolah.store");

    Route::post("/create", [SekolahController::class, "create"])->name("sekolah.create");
    Route::put("/update/{id}", [SekolahController::class, "update"])->name("sekolah.update");
    Route::get("/delete/{id}", [SekolahController::class, "destroy"])->name("sekolah.destroy");
});

