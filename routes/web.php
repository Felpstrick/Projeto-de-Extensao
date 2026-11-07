<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

route::middleware('guest')->group(function () {
    route::get('/login', [loginController::class, 'formLogin'])->name('login');
    route::post('/login', [loginController::class, 'login']);
});

route::middleware('auth')->group(function () {
    route::post('/logout', [loginController::class, 'logout'])->name('logout');
});


//invoca controller da dashboard, com autenticação
Route::get('/dashboard', DashboardController::class)
    ->middleware('auth')
    ->name('dashboard');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // rotas de materiais e vendas da professora
});