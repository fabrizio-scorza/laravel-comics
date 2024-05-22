<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route collegata alla homepage
Route::get('/', function () {
    return view('homepage');
})->name('home');

// route collegata alla pagina comics
Route::get('/comics', function () {
    // recuperiamo l'array dal file comics.php
    $comics = config('comics');

    // ritorniamo la vista con i dati aggregati dalla funzione compact
    return view('comics', compact('comics'));
})->name('comics');

// route collegata alla books
Route::get('/books', function () {
    return view('books');
})->name('books');

// route collegata alla manga
Route::get('/manga', function () {
    return view('manga');
})->name('manga');

// route collegata alla about
Route::get('/about', function () {
    return view('about');
})->name('about');
