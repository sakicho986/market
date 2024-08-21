<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FleaMarketController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [FleaMarketController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('/mypage', [AuthController::class, 'mypage']);
});
Route::middleware('auth')->group(function () {
    Route::get('/mypage/profile', [AuthController::class, 'profile']);
    Route::post('/mypage/profile', [AuthController::class, 'profile']);
});
Route::get('/item/:item_id', [FleaMarketController::class, 'item']);
Route::get('/sell', [FleaMarketController::class, 'sell']);

Route::get('/profile', [AuthController::class, 'edit']);
Route::post('/profile', [AuthController::class, 'update']);