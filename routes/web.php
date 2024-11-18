<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalerieController;

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});


Route::get('/contact', function () {
    return view('contact.contact');
});

Route::get('/galeries', [GalerieController::class, 'index']);

Route::get('/', [BlogController::class, 'mainBlog']);

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);

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

Route::get('/cycles', function () {
    return view('cycles.cycles');
});

/*Route::get('/mainBlog', function () {
    return view('layout.partial.main');
});

Route::get('/blogs', function () {
    return view('blogs.blogs');
});

Route::get('/blog', function () {
    return view('blogs.blog');
});

Route::get('/galeries', function () {
    return view('galeries.galerie');
});
*/

