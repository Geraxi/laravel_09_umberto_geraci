<?php

use Illuminate\Support\Facades\Route;
use\App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class,'homepage']);

Route:: get('/chi siamo',[PublicController::class,'chiSiamo'])->name('chi.siamo');

Route::get('/contatti', function(){
    return view('contacts');
});