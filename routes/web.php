<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\CafeteriaController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\FournitureController;
use App\Http\Controllers\Albaraime1Controller;
use App\Http\Controllers\Albaraime2Controller;
use App\Http\Controllers\CursusScolaireController;
use App\Http\Controllers\ControleContinuController;

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/', [LandingController::class, 'index']);

Route::get('/albaraime1', [Albaraime1Controller::class, 'index']);
Route::get('/albaraime2', [Albaraime2Controller::class, 'index']);

Route::get('/controles-continus', [ControleContinuController::class, 'index']);
Route::get('/fourniture', [FournitureController::class, 'index']);
Route::get('/transport', [TransportController::class, 'index']);
Route::get('/cafeteria', [CafeteriaController::class, 'index']);
Route::get('/activites-parascolaire', [ActiviteController::class, 'index']);

Route::get('/maternelle', [CursusScolaireController::class, 'getMaternelle']);
Route::get('/primaire', [CursusScolaireController::class, 'getPrimaire']);
Route::get('/college', [CursusScolaireController::class, 'getCollege']);
Route::get('/lycée', [CursusScolaireController::class, 'getLycee']);

Route::get('/galeries', [GalerieController::class, 'index']);
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/form_contact', [ContactController::class, 'form_contact']);

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);


Route::get('/politique-de-confidentialite', function () {
    return view('politique.politique');
});

Route::get('/apropos', function () {
    return view('apropos.apropos');
});

// Route::get('/', function () {
//     return view('maintenance');
// });

 



// Route::get('/albaraime1', function () {
//     return view('albaraimes.albaraime1');
// });

// Route::get('/albaraime2', function () {
//     return view('albaraimes.albaraime2');
// });

// Route::get('/transport', function () {
//     return view('services.transport');
// });

// Route::get('/cafeteria', function () {
//     return view('services.cafeteria');
// });

// Route::get('/activites-parascolaire', function () {
//     return view('services.activites');
// });

// Route::get('/contact', function () {
//     return view('contact.contact');
// });

//Route::get('/', [BlogController::class, 'mainBlog']);

// Route::get('/fournitures', function () {
//     return view('fournitures.fournitures');
// });

// Route::get('/services', function () {
//     return view('services.services');
// });

// Route::get('/cycles', function () {
//     return view('cycles.cycles');
// });

// Route::get('/mainBlog', function () {
//     return view('layout.partial.main');
// });

// Route::get('/blogs', function () {
//     return view('blogs.blogs');
// });

// Route::get('/blog', function () {
//     return view('blogs.blog');
// });

// Route::get('/galeries', function () {
//     return view('galeries.galerie');
// }); 

