<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;


//首頁 
Route::get('/', function () { return view('home'); });
Route::get('/home', [Controller::class, 'home_page'])->name('home');

//註冊頁
Route::get('/register_page', [UserController::class, 'register_page'])->name('user.register_page');
//寫入註冊資料
Route::post('/register', [UserController::class, 'register'])->name('user.register');
//完成註冊頁
Route::get('/finished_register', [UserController::class, 'finished_register'])->name('user.finished_register');


//登入頁
Route::get('/login_page', [UserController::class, 'login_page'])->name('user.login_page');
//登入(#)
Route::post('/login', [UserController::class, 'login'])->name('user.login');

//使用者列表(#)
Route::get('/user_list', [UserController::class, 'user_list'])->name('user.user_list');
