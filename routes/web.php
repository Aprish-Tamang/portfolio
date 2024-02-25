<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NamiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('Home');

Route::get('/about', function () {
    return view('pages.about');
})->name('About');

Route::get('/resume', function () {
    return view('pages.resume');
})->name('Resume');

Route::get('/blogs', function () {
    return view('pages.blogs');
})->name('Blog');

Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('Contact');
//for email
Route::POST('/contacts', [ContactController::class,'contacts'] );



Route::get('/namis', [NamiController::class,'index']);
Route::get('/namis', [NamiController::class,'create']);



