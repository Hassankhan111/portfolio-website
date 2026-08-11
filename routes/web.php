<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

route::get('/projects', function (){
    return view('projects');
});

route::get('/tools', function (){
    return view('tools');
});

Route::get('/contact', function () {
    return view('contact');
});
/* backend admin dashboard------------------------------------------------------- */
Route::get('/admin', function () {
    return view('Dashboard.admin');
});

Route::get('/show-user', function () {
    return view('Dashboard.showuser');
});

Route::get('/user/{id}', [AdminController::class, 'getuser'])->name('show-user');


Route::get('/admin', [AdminController::class, 'index'])->name('adminget');

route::post('user-delete/{id}',[AdminController::class, 'destroy'])->name('delete-user');

Route::patch('/admin/contact/{id}/read', [AdminController::class, 'markAsRead'])
    ->name('contact.read');

Route::post('/contact-save', [ContactController::class, 'save'])->name('contact-save');