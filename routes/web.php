<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/tentang', function(){
    return view('tentang');
})->name('tentang');

Route::get('/galeri', function(){
    return view('galeri');
})->name('galeri');
