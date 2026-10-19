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
    // Route::get('/insight/{slug}', [ArticleController::class, 'show'])->name('insight.show');


});



