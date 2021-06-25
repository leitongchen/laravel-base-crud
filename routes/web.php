<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Mostra i dati di tutti gli elementi
Route::get('/comics', 'ComicController@index')->name('comics.index');

// Salva i dati 
Route::post('/comics', 'ComicController@store')->name('comics.store');

// Form per creare un nuovo elemento
Route::get('/comics/create', 'ComicController@create')->name('comics.create');

// Modifica uno specifico elemento
Route::get('/comics/{id}/edit', 'ComicController@edit')->name('comics.edit');

// Aggiorna lo specifico elemento
Route::match(['PUT', 'PATCH'], '/comics/{id}', 'ComicController@update')->name('comics.update');

// Cancella i dati di un elemento specifico
Route::delete('/comics/{id}', 'ComicController@destroy')->name('comics.destroy');

// Mostra i dati di un singolo elemento specificato
Route::get('/comics/{id}', 'ComicController@show')->name('comics.show');







