<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/index', function () {
    return view('index');
});



Route::get('/property-list', function () {
    return view('property-list');
    
});


use App\Http\Controllers\AppartmentController;

// Define your routes
Route::get('/property-list', [AppartmentController::class, 'index'])->name('property-list');
Route::post('/property-list', [AppartmentController::class, 'store'])->name('property-list.store');
// In web.php
Route::delete('/appartment/{id}', [AppartmentController::class, 'destroy'])->name('appartment.destroy');




Route::get('/add', function () {
    return view('appartment');
});

