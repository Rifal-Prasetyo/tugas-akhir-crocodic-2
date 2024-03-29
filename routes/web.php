<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LoginController::class, 'loginPage'])->name('login');
Route::post('/login', [LoginController::class, 'loginAction'])->name('loginAction');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Login User 
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'homepage'])->name('homepage');
    Route::get('/home/{any}', [HomeController::class, 'homepage']);
});
