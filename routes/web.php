<?php
// GOAL: come detto a lezione rifare una show + index (con migration + dati inseriti a mano in PHPMyAdmin) sulla seguente entita':
//   Cagnolini:
//   - id
//   - nome (stringa)
//   - tipo (stringa)
//   - altezza (numero)
//   - peso (numero)
// La home mostrera' la lista di tutti i nomi di cagnolini presenti nel DB
// La show mostrera' tutti i dati del cagnolino su cui l'utente ha cliccato

use Illuminate\Support\Facades\Route;

Route::get('/', 'CagnoliniController@index')->name('home');

Route::get('/show/{id}', 'CagnoliniController@show')->name('show');
