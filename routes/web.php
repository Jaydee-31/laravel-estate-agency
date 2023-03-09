<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/property-grid', function () {
    return view('property-grid');
})->name('property-grid');

Route::get('/property-single', function () {
    return view('property-single');
})->name('property-single');

// Route::get('create', [MessagesController::class, 'create']);

// Route::resource('messages', MessagesController::class
// );
Route::post('/messages', 'MessagesController@store');