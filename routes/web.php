<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;

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

Route::get('/',[AuthController::class,'index']);
Route::post('/',[AuthController::class,'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('/visi', [VisiController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/guru', [GuruController::class, 'index']);
Route::middleware(['auth'])->group(function () {
        Route::prefix('admin')->middleware(['akses:admin'])->group(function () {
        Route::get('/home', [HomeController::class, 'index']);
    });
});

    Route::middleware(['akses:Admin'])->group(function() {
        // Admin
            Route::get('/admin', [AdminController::class, 'index']);
            Route::get('/admin/tambah', [AdminController::class, 'create']);
            Route::post('/admin/simpan', [AdminController::class, 'store']);
            Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
            Route::get('/admin/detail/{id}', [AdminController::class, 'detail']);
            Route::post('/admin/edit/simpan', [AdminController::class, 'update']);
            Route::post('/admin/detail/{id}', [AdminController::class, 'detail']);
            Route::get('/admin/confirm/{id}', [AdminController::class, 'confirm']);
            Route::get('/admin/unduh', [AdminController::class, 'unduhPendaftaran']);
            Route::delete('/admin/hapus', [AdminController::class, 'destroy']);
        });
