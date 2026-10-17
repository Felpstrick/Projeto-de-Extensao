<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::middleware('guest')->group(function () {
    route::get('/login', [])-> name('login');
    route::post('/login', []);
});