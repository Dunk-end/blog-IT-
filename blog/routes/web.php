<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/reg/', function () {
    return view('reg');
})->name('reg');

Route::get('/entrance/', function () {
    return view('entrance');
})->name('entrance');

Route::post(
    'contact/submit', [ContactController::class, 'submit']
)->name('contact-form');
Route::get(
    'contact/all', [ContactController::class, 'allData']
)->name('contact-data');


