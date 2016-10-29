@extends('layouts.app')

@section('htmlheader_title')
    Equipos
@endsection

@section('contentheader_title')
    Mis Equipos
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
                    <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Equipos registrados</span>
                        <span class="info-box-number">3</span>
                        {{--TODO: Pasar el número de equipos registrados --}}
                        <span class="info-box-number"><a href="/equipos/create">Registrar nuevo</a></span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div>
        </div> {{-- Fin del row --}}
        <div class="row">
            <div class="box box-default">
                <div class="box-header with-border">
                    {{--<h3 class="box-title">Browser Usage</h3>--}}
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
                                        <th>Nombre</th>
                                        <th>Entrenador</th>
                                        <th>Asistente</th>
                                        <th>Email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox" id="1" name="1"></td>
                                        <td><a href="/equipos/show/">Club Regatas de Santa Fe</a></td>
                                        <td>Luke Cage</td>
                                        <td>Jessica Jones</td>
                                        <td>regatas@mail.com</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="2" name="2"></td>
                                        <td><a href="/equipos/show/">Club Atlético Independiente de Avellaneda</a></td>
                                        <td>Danny Rand</td>
                                        <td>Matt Murdock</td>
                                        <td>hellsKitchen@mail.com</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="3" name="3"></td>
                                        <td><a href="/equipos/show/">Imperio</a></td>
                                        <td>Wilson Fisk</td>
                                        <td>Elektra Natchios</td>
                                        <td>money@mail.com</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> {{--  fin del col-sm-12 --}}
                    </div> {{--fin del row--}}
                </div>  {{-- fin del box-body --}}
            </div>  {{--fin del box--}}
        </div> {{-- fin del row--}}
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
