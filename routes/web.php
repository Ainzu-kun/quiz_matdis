<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function() {
    // Register Routes
    Route::get('/register', 'register')->name('auth.register');
    Route::post('/register/store', 'store')->name('auth.store');

    // Login Routes
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/login/auth', 'authorization')->name('auth.authorization');

    // Logout Routes
    Route::get('/logout', 'logout')->name('auth.logout');
});
