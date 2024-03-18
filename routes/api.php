<?php

use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\ProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/home', [DashboardController::class, 'dashboardDataAll']);
Route::get('/home/allProduct', [ProdukController::class, 'getAllDataProduks']);

// Kategori
Route::get('/home/category/get', [KategoriController::class, 'getAllCategory']);
