<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/skill', function () {
    return view('tools');
});

Route::get('/contect', function () {
    return view('contact');
});

route::post('contact-save', [ContactController::class, 'save'])->name('contact-save');

/* backend-----------------------------------------------------------------------------*/
 


Route::get('/user', function () {
    return view('dashboard.showuser');
});

route::GET('admin', [AdminController::class, 'index'])->middleware(['admin'])->name('admin');
require __DIR__.'/auth.php';



route::get('showuser/{id}', [AdminController::class, 'getuser'])->name('show-user');


route::delete('destroy/{id}', [AdminController::class, 'destroy'])->name('delete-user');


route::PATCH('markAsRead/{id}', [AdminController::class, 'markAsRead'])->name('contact.read');
require __DIR__.'/auth.php';