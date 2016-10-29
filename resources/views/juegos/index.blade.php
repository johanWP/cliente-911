@extends('layouts.app')

@section('htmlheader_title')
    Juegos
@endsection

@section('contentheader_title')
    Mis Juegos
@endsection

@section('otro-header')

    <link href="{{ asset('/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/jquery.dataTables_themeroller.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-sm-3">
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-green"><i class="fa fa-futbol-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Juegos registrados</span>
                        <span class="info-box-number">3</span>
                        <span class="info-box-number"><a href="/ligas/create">Registrar nuevo</a></span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div>
        </div>

        <div class="row">
            <div class="box box-default">
                <div class="box-header with-border">
                    {{--<h3 class="box-title">Browser Usage</h3>--}}
                    {{--<div class="btn-group">--}}
                        {{--<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--Seleccionar <span class="caret"></span>--}}
                        {{--</button>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="#">Todos</a></li>--}}
                            {{--<li><a href="#">Ninguno</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    <button class="btn btn-default"><i class="fa fa-trash"></i> Eliminar</button>
                    {{--<div class="box-tools pull-right">--}}
                        {{--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>--}}
                        {{--</button>--}}
                        {{--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>--}}
                    {{--</div>--}}
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">

                                <table class="table table-hover" id="datatable">
                                    <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll" name="selectAll" value="all"></th>
                                        <th>Local</th>
                                        <th>Visitante</th>
                                        <th>Fecha</th>
                                        <th>Sede</th>
                                        <th>Resultado</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox" id="1" name="1"></td>
                                        <td><a href="#">Club Atlético Independiente de Avellaneda</a></td>
                                        <td><a href="#">River Plate</a></td>
                                        <td><p>31-01-2016</p></td>
                                        <td><p>Natatorio River Plate</p></td>
                                        <td><p>12 - 8</p></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="1" name="1"></td>
                                        <td><a href="#">Asociación Atlética Argentinos Junior</a></td>
                                        <td><a href="#">Gimnasia y Esgrima de Buenos Aires</a></td>
                                        <td><p>31-03-2016</p></td>
                                        <td><p>Sede Semillero AAAJ</p></td>
                                        <td><p>7 - 10</p></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div> {{--  fin del col-sm-12 --}}
                    </div> {{--fin del row--}}
                </div>  {{-- fin del box-body --}}
            </div>  {{--fin del box--}}
        </div> {{-- fin del row--}}

        {{-- fin de la tabla--}}
    </div>

@endsection

@section('otros-scripts')
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        }); // fin del document.ready
    </script>
@endsection
