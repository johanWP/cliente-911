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
Route::get('/equipos/show', function () {
    return view('equipos.show');
});
Route::get('/juegos/', function () {
    return view('juegos.index');
});
Route::get('/sedes/', function (){
    return view('sedes.index');
});
Route::get('/sedes/create', function (){
    return view('sedes.create');
});


/*****  DEMOS DE AJAX *********/

Route::get('/ajax/juegos/', function () {
    $events = [
        [
            'title' => 'Un juego',
            'start' => '2016-09-28 09:00:00',
            'end' => '2016-09-28 10:00:00',
            'backgroundColor' => "#f56954", //red
            'borderColor' => "#f56954" //red

        ],
        [
            'title' => 'Otro juego',
            'start' => '2016-10-05 09:00:00',
            'end' => '2016-10-02 10:00:00',
            'backgroundColor' => "#f56954", //red
            'borderColor' => "#f56954" //red

        ]
    ];
    return json_encode($events);
});

Route::post('/ajax/calendar/', function($request){
    if($request->type=='new')
    {
        return ['status'=>'success', 'eventid'=> rand(1, 1000)];
    }

});