<?php

use App\Http\Controllers\DeportistaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Container\Attributes\Auth;

Route::get('/', [DeportistaController::class, 'main']);
//Route::get('deportista/messi/22', [DeportistaController::class, 'index']);
Route::resource('deportista', DeportistaController::class)->except(['create', 'edit']);
//Route::get('fetch', [DeportistaController::class, 'fetch']);
//Route::get('deportista1', [DeportistaController::class, 'index1']);

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('login', [UserController::class, 'login'])->name('login');
Route::post('logout', [UserController::class, 'logout'])->name('logout');
Route::post('register', [UserController::class, 'register'])->name('register');
