<?php

use Illuminate\Support\Facades\Route;

use  App\Models\Treinos;

//Treinos Route
Route::namespace('App\Http\Controllers\Api')->prefix('treinos')->group(function () {
    Route::get('/', 'TreinosController@index');
    Route::post('/', 'TreinosController@save');
});

//Tipos Treino Route
Route::namespace('App\Http\Controllers\Api')->prefix('tipos-treino')->group(function () {
    Route::get('/', 'TiposTreinoController@index');
    Route::post('/', 'TiposTreinoController@save');
});
