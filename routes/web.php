<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/how-to-use', function () {
    return view('pages.how-to-use');
})->name('how-to-use');

Route::get('/how-to-use-crypto-signals', function () {
    return view('pages.how-to-use-crypto-signals');
})->name('how-to-use-crypto-signals');

Route::get('/how-to-use-forex-signals', function () {
    return view('pages.how-to-use-forex-signals');
})->name('how-to-use-forex-signals');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
