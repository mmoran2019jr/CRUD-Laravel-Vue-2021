<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Rutas API
Route::get('/home', 'HomeController@index')->name('home');
Route::apiResource('usuarios', 'UsuarioController');

