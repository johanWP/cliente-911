@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection

@section('contentheader_title')
    Registrar nuevo usuario
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="col-sm-11">
            <p class="help-block">Recuerde que todos los campos son <b>obligatorios</b>.</p>
            {!! Form::open(['url' => '/usuarios']) !!}
            @include('usuarios.form')
            {!! Form::close() !!}
        </div>
    </div>

@endsection
