<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('welcome');
});

route::middleware('guest')->group(function () {
    route::get('/login', [loginController::class, 'formLogin'])->name('login');
    route::post('/login', [loginController::class, 'login']);
});