<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::prefix('login')->group(function() {
    Route::get('/', [AuthController::class, 'login']);
    Route::post('/auth', [AuthController::class, 'auth']);
});

Route::prefix('register')->group(function() {
    Route::get('/', [RegisterController::class, 'index']);
    Route::post('/create', [RegisterController::class, 'create']);
});

Route::middleware('login')->group(function() {
    Route::get('/', [AppController::class, 'index']);
    Route::post('/create', [AppController::class, 'create']);
    Route::get('/logout', [AuthController::class, 'logout']);
});