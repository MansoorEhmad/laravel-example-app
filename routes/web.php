<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\resgisterController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\themeController;


Route::get('/', [loginController::class, 'Index'])->name('index');
Route::post('/index', [loginController::class, 'userLogin'])->name('login.index');
Route::get('/logout', [loginController::class, 'userLogout'])->name('logout.index');

Route::get('/welcome', [welcomeController::class, 'Welcome'])->name('page.welcome');

Route::get('/register', [resgisterController::class, 'Register'])->name('page.register');
Route::post('/registerUser', [resgisterController::class, 'registerUser'])->name('register.user');

Route::get('/edit/user', [updateController::class, 'editUser'])->name('edit.user');

Route::post('/update/user', [updateController::class, 'updateUser'])->name('update.user');

Route::get('/theme/change', [themeController::class, 'themeChange'])->name('theme.change');


//Route::get('/', function () {
//    return view('welcome');
//});