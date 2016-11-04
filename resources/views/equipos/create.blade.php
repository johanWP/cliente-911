@extends('layouts.app')

@section('htmlheader_title')
    Equipos
@endsection

@section('contentheader_title')
    Registrar nuevo equipo
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="box box-default">
                <div class="box-body" id="divBoxBody">
                    <div class="text-center" id="divSpinner"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
                        <span class="sr-only">Loading...</span>
                    </div>

                    <p class="help-block">Recuerde que todos los campos son <b>obligatorios</b>.</p>
                    {!! Form::open(['url' => '/equipos']) !!}
                    @include('equipos.form')
                    {!! Form::close() !!}

                </div>  {{-- fin del box-body --}}
            </div>  {{--fin del box--}}
        </div> {{-- fin del row--}}

    </div>


@endsection
