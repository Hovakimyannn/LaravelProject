<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/home', function () {
    return view('user.userPage');
})->name('home')->middleware('auth');

Route::get('/', [UserController::class, 'welcome'])->name('welcome');
Route::get('/register', [UserController::class, 'create'])->name('register.create');
Route::post('/register', [UserController::class, 'store'])->name('register.store');
Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/home/change_user_image', [UserController::class, 'changeUserImage'])->name('changeUserImage');
