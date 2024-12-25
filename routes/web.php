<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaDashboardController;
use App\Http\Controllers\DosenDashboardController;
use App\Http\Controllers\ProdiDashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('backend.index');
});

Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/dosen',[DosenController::class,'index']);
Route::get('/prodi',[ProdiController::class,'index']);

//login 
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);

/// 
Route::resource('/mahasiswa-dashboard', MahasiswaDashboardController::class);
Route::resource('/dosen-dashboard', DosenDashboardController::class);
Route::resource('/prodi-dashboard', ProdiDashboardController::class);

/// logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate(); 
    request()->session()->regenerateToken(); 
    return redirect('/login')->with('success', 'Anda berhasil logout.');
})->name('logout');
