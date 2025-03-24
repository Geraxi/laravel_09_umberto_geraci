<?php


use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MovieController;



Route::get('/',[PublicController::class, 'homepage'] )->name('homepage');

Route:: get('/chi-siamo',[PublicController::class, 'aboutUs'])->name('aboutUs');

Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'])->name('aboutUsDetail');

Route::get('/contatti', function(){
    return view('contacts');
})->name('contacts');

Route::get('/movies',[MovieController::class,'index'] )-> name('movie.index');

Route::get('/movie/detail/{id}',[MovieController::class, 'movieDetail'] )->name('movie.detail');


//CRUD

Route::post('/movie/create',[MovieController::class,'create'])->name('movie.create')->middleware('auth');

//invio mail

Route::post('/contact-us', [PublicController::class, 'contactUs'])->name('contactUs');


Route::get('/movie/create', [MovieController::class, 'create'])->name('movie.create');

Route::post('/movie/submit',[MovieController::class,'store'])->name('movie.submit');

Route::get('/movie/index',[MovieController::class,'index'])->name('movie.index');

//Show movie

Route::get('/movie/show/{movie}',[MovieController::class,'show'])->name('movie.show');
Route::get('/movie/edit{movie}', [MovieController::class, 'edit'])->name('movie.edit');
Route::put('/movie/update{movie}', [MovieController::class, 'update'])->name('movie.update');
Route::delete('/movie/delete/{movie}', [MovieController::class, 'destroy'])->name('movie.delete');

//profilo

Route::get('/user/profile',[PublicController::class,'profile'])->name('user.profile');


Route::get('/register', [PublicController::class, 'create'])->name('register');





//Genre

Route::post('/genre/create',[GenreController::class,'create'])->name('genre.create');
Route::post('/genre/create/submgisterit',[GenreController::class,'store'])->name('genre.submit');
Route::get('/genre/index',[GenreController::class,'index'])->name('genre.index');
Route::get('/genre/show/{genre}',[GenreController::class,'show'])->name('genre.show');