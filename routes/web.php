<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// auth Routes 

Route::get('/login', [AuthController::class, 'login']);
Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
Route::get('/logout', [AuthController::class, 'logout']);