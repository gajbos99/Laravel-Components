<?php

use App\Http\Controllers\ShoeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route naar sale pagina
Route::get('/sale', [ShoeController::class, 'sale'])->name('shoes.sale');

// Route naar shoes pagina
Route::get('/shoes', [ShoeController::class, 'shoes'])->name('shoes.index');

// Route naar sneakers pagina
Route::get('/sneakers', [ShoeController::class, 'sneakers'])->name('shoes.sneakers');

// Route naar boots pagina
Route::get('/boots', [ShoeController::class, 'boots'])->name('shoes.boots');

