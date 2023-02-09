<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/registration',[RegisterController::class, 'registration'])->name('registration');
Route::post('/valid_registration',[RegisterController::class, 'valid_registration'])->name('valid_registration');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/valid_login',[RegisterController::class, 'valid_login'])->name('valid_login');
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/logout',[DashboardController::class, 'logout'])->name('logout');

