<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Route::get('/', function () {
//     return view('login');
// });

Route::get('/login', [AuthController::class, 'login']);

Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
Route::post('/logout', [AuthController::class, 'logout']);

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     });
// });