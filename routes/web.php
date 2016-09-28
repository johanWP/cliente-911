<?php

Route::get('/', function () {
    return view('welcome');
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
Route::get('/juegos/', function () {
    return view('juegos.index');
});
