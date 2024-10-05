<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
// use Inertia\Inertia;

// formal render route with inertia
// Route::get('/', function () {
//     // this for progress indicator delay load
//     sleep(1);
//     return Inertia::render('Home');
// })->name('home');


// // standart render route with inertia
// Route::get('/about', function () {
//     return inertia('About');
// })->name('about');

// // sorthand render route with inertia
// Route::inertia('/contact', 'Contact', ['contact' => '082267717522'])->name('contact');


Route::inertia('/', 'HomePage')->name('home.page');

Route::inertia('/register', 'Auth/RegisterPage')->name('register.page');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');

Route::inertia('/login', 'Auth/LoginPage')->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
