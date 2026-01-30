<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/about', function(){
    return view ('pages.about');
})->name('about');
Route::get('/services', function(){
    return view ('pages.services');
})->name('services');
Route::get('/reasons', function(){
    return view ('pages.reasons');
})->name('reasons');
Route::get('/workflow', function(){
    return view ('pages.workflow');
})->name('workflow');
Route::get('/insight', function(){
    return view ('pages.insight');
})->name('insight');
Route::get('/contact', function(){
    return view ('pages.contact');
})->name('contact');
