<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MovieController;


Route::get('/',[PublicController::class, 'homepage'] )->name('homepage');

Route:: get('/chi-siamo',[PublicController::class, 'aboutUs'])->name('aboutUs');

Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'])->name('aboutUsDetail');

Route::get('/contatti', function(){
    return view('contacts');
})->name('contacts');

Route::get('/movies',[MovieController::class,'movieList'] )-> name('movie.list');

Route::get('/movie/detail/{id}',[MovieController::class, 'movieDetail'] )->name('movie.detail');

//invio mail

Route::post('/contact-us', [PublicController::class, 'contactUs'])->name('contactUs');


Route::get('/movie/create', [MovieController::class, 'create'])->name('movie.create');

Route::post('/movie/submit',[MovieController::class,'store'])->name('movie.submit');