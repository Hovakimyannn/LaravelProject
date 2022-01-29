<?php

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/home', [UserController::class, 'index'])->name('index');
Route::get('/', [UserController::class, 'welcome'])->name('welcome');
Route::get('/register', [UserController::class, 'create'])->name('register.create');
Route::post('/register', [UserController::class, 'store'])->name('register.store');
Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/home/change_user_image', [UserController::class, 'changeUserImage'])->name('changeUserImage');
Route::post('/message', [UserController::class, 'message']);


Route::get('/admin', [MainController::class, 'index'])->name('admin.index')->middleware('auth');
Route::post('/admin/remove', [MainController::class, 'remove']);
Route::post('/admin/message',[MainController::class,'publicMessage']);
