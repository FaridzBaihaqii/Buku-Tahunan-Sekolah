<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Route::middleware(['guest'])->group(function () {
//     Route::get('/', [AuthController::class, 'index'])->name('login');
//     Route::post('/', [AuthController::class, 'check']);
// });

Route::get('/home', function () {
    return redirect('/dashboard/home');
});

Auth::routes();

Route::get('', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['guest'])->group(function () {
//     Route::get('/', [AuthController::class, 'index'])->name('login');
//     Route::post('/', [AuthController::class, 'check']);
// });

// Route::get('/home', function () {
//     return redirect('/');
// });

Route::middleware(['auth'])->group(function () {
    Route::middleware(['UserPeran:Admin'])->group(function() {
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
});