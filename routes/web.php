<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionsController;


Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'create'])->name('registre.index');
Route::get('/login', [SesionsController::class, 'create'])->name('login.index');