<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function() {

    Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');    
    Route::get('/insight/{slug?}', [ArticleController::class, 'index'])->name('insight');
    Route::get('/contact', [App\Http\Controllers\ContactController::class,'index'])->name('contact');
    // Route::get('/insight/{slug}', [ArticleController::class, 'show'])->name('insight.show');


});



