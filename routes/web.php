<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});



Route::get('/usuarios', function () {
    return view('usuarios.index');
});
Route::get('/usuarios/create', function () {
    return view('usuarios.create');
});
Route::get('/ligas', function () {
    return view('ligas.index');
});
Route::get('/ligas/create', function () {
    return view('ligas.create');
});
Route::get('/equipos', function () {
    return view('equipos.index');
});
Route::get('/equipos/create', function () {
    return view('equipos.create');
});
Route::get('/equipos/show', function () {
    return view('equipos.show');
});
Route::get('/juegos/', function () {
    return view('juegos.index');
});
Route::get('/juegos/create', function () {
    return view('juegos.create');
});
Route::get('/sedes/', function (){
    return view('sedes.index');
});
Route::get('/sedes/create', function (){
    return view('sedes.create');
});

//
Route::get('/api/getEquipos/', 'TeamController@index');