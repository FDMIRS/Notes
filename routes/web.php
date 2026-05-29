<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('login');
});

Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);