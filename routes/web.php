<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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
});

Route::get('/', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
Route::get('/auth-forgot-password', [LoginController::class, 'forgetPassword'])->name('forgetPassword');
Route::get('/auth-register', [LoginController::class, 'newRegistration'])->name('newRegistration');
Route::post('/auth-reset-password', [LoginController::class, 'resetPassword'])->name('resetPassword');
Route::post('/change-password', [LoginController::class, 'changePassword'])->name('changePassword');
