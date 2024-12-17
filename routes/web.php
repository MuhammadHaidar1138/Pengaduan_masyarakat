<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\ReportController;


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
    return view('landingPage');
});
Route::get('login' , function () {
    return view('login');
})->name('login');
Route::post('/login/proses', [UserController::class, 'loginProces'])->name('login.proces');

Route::get('/register', [UserController::class, 'index'])->name('register');
Route::post('/register/proses', [UserController::class, 'store'])->name('register.proces');

Route::get('/dashboard', [AdminController::class, 'index'])->name('homeAdmin');
Route::get('/guest/dashboard', [UserController::class, 'dashboardGuest'])->name('homeGuest');

Route::get('/pengaduan', [ReportController::class, 'index'])->name('pengaduan');
Route::post('/pengaduan/proses', [ReportController::class, 'store'])->name('pengaduan.proces');

