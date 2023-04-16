<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\LoginController;
use App\Http\Controllers\home\RegisterController;
use App\Http\Controllers\home\HomeController;

Route::get('/register',[RegisterController::class,'getRegister'])->name('home.register');
Route::post('/register',[RegisterController::class,'postRegister'])->name('home.post.register');
Route::get('/login',[LoginController::class,'getLogin'])->name('home.login');
Route::post('/login',[LoginController::class,'postLogin'])->name('home.post.login');
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/logout',[LoginController::class,'logout'])->name('home.logout');
