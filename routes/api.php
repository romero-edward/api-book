<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookAuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// 
Route::controller(BookController::class)->group(function(){
    Route::get('/books', 'index');
    Route::post('/books', 'store');
    Route::get('/books/{id}', 'show');
    Route::put('/books/{id}', 'update');
    Route::delete('/books/{id}', 'destroy');
});


// Otra forma de hacer la ruta que esta arriba seria como se muestra a continuacion
Route::resource('authors', AuthorController::class)->only(['index', 'store', 'show', 'update', 'destroy']);


Route::resource('book_authors', BookAuthorController::class)->only(['index', 'store', 'show', 'update', 'destroy']);

