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
    return view('home');
});

Route::resource('comics', 'ComicsController');

// Route::resource creerà tutte queste routes ↓

// // Recupero elenco di tutti i Comics
// Route::get('/comics', 'ComicsController@index')->name('comics.index');

// // Recupero Comic in base ad una chiave primaria
// Route::get('/comics/{id}', 'ComicsController@show')->name('comics.show');

// // Visualizzo la pagina con il form di creazione
// Route::get('/comics/create', 'ComicsController@create')->name('comics.create');

// //Salva la nuova risorsa
// Route::post('/comics', 'ComicsController@store')->name('comics.store');

// //Visualizza il form di edit della risorsa in base alla chiave primaria
// Route::post('/comics/{id}/edit', 'ComicsController@edit')->name('comics.edit');

// //Aggiorna i dati della risorsa in base alla chiave primaria
// Route::put('/comics/{id}', 'ComicsController@update')->name('comics.update');

// //Elimina una risorsa in base alla chiave primaria
// Route::delete('/comics/{id}','ComicsController@destroy')->name('comics.destroy');





