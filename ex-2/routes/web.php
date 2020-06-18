<?php
// GOAL: generare tutti i file necessari per eseguire una CRUD completa (lettura,
// scrittura, creazione, eliminazione) di elementi dalla tabella Omini cosi' definita:
// - id
// - first name
// - last name
// - address
// - code
// - state
// - phone number
// - role
// L'home page dara' la possibilita' di vedere tutti i nomi e cognomi e di creare
// un nuovo omino; sara' possibile attraverso un link entrare nell'entita' e
// vederne tutti i dettagli ed eseguire le operazioni di modifica (edit + delete);

use Illuminate\Support\Facades\Route;

Route::get('/', 'OminiController@index')->name('home');

Route::get('/show/{id}', 'OminiController@show')->name('show');

Route::get('/create', 'OminiController@create')->name('create');

Route::post('/store', 'OminiController@store')->name('store');
