<?php

use App\Http\Controllers\Auth\registerController;
use App\Http\Controllers\Auth\loginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
   //Auth

});

Route::middleware('auth')->group(function () {
   
});

route::get('/signup', [registerController::class, 'showregister']);

route::post('register.store', [registerController::class, 'register'])->name('register.store');



route::get('login', [loginController::class, 'showLogin']);

route::post('login', [loginController::class, 'login'])->name('login');



route::post('logout', [loginController::class, 'logout'])->name('logout');