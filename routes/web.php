<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/pagina1', function () {
    return view('pagina1');
})->name('pagina1');

Route::get('/pagina2', function () {
    return view('pagina2');
})->name('pagina2');

