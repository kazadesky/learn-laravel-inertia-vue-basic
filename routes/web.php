<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// formal render route with inertia
Route::get('/', function () {
    return Inertia::render('Home');
});


// standart render route with inertia
Route::get('/about', function () {
    return inertia('About', ['user' => 'Desky']);
});

// sorthand render route with inertia
Route::inertia('/contact', 'Contact', ['contact' => '082267717522']);
