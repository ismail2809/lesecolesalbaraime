<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/maintenance', function () {
    return view('maintenance');
});

Route::get('/apropos', function () {
    return view('apropos.apropos');
});
 
Route::get('/fournitures', function () {
    return view('fournitures.fournitures');
});

Route::get('/services', function () {
    return view('services.services');
});



Route::get('/contact', function () {
    return view('contact.contact');
});

