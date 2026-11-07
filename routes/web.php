<?php

use App\Http\Controllers\cadastroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\materiaisController;
use App\Http\Controllers\testesController;

Route::get('/', function () {
    return view('welcome');
});
//rota login
route::middleware('guest')->group(function () {
    route::get('/login', [loginController::class, 'formLogin'])->name('login');
    route::post('/login', [loginController::class, 'login']);
});

//rota cadastro
route::middleware('guest')->group(function () {
    route::get('/cadastroUsuario', [cadastroController::class, 'formCadastro'])->name('cadastroUsuario');
    route::post('/cadastroUsuario', [cadastroController::class, 'cadastroUsuario']);
});

//rota testes
route::middleware('guest')->group(function () {
    route::get('/testes', [testesController::class, 'testes'])->name('testes');
    //route::post('/testes', [testesController::class, 'testes']);
});


    



