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
            <div class="col-sm-11">
            <div class="table-responsive">

                <table class="table table-striped table-hover" id="datatable">
                    <thead>
                    <tr>
                        <th>Local Vs. Visitante</th>
                        <th>Fecha</th>
                        <th>Sede</th>
                        <th>Resultado</th>
                        <th width="15%">&nbsp</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="#">Club Atlético Independiente de Avellaneda Vs. River Plate</a></td>
                        <td><p>31-01-2016</p></td>
                        <td><p>Natatorio River Plate</p></td>
                        <td><p>12 - 8</p></td>
                        <td class="pull-right">
                            <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar juego"><i class="fa fa-2x fa-edit"></i></button>
                            {{--<button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Ver detalle"><i class="fa fa-2x fa-eye"></i></button>--}}
                            <button class="btn btn-danger"  data-toggle="tooltip" data-placement="top" title="Eliminar juego"><i class="fa fa-2x fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Asociación Atlética Argentinos Junior Vs. Club Atlétco Independiente de Avellaneda</a></td>
                        <td><p>31-03-2016</p></td>
                        <td><p>Sede Semillero AAAJ</p></td>
                        <td><p>7 - 10</p></td>
                        <td class="pull-right">
                            <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar juego"><i class="fa fa-2x fa-edit"></i></button>
                            {{--<button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Ver detalle"><i class="fa fa-2x fa-eye"></i></button>--}}
                            <button class="btn btn-danger"  data-toggle="tooltip" data-placement="top" title="Eliminar juego"><i class="fa fa-2x fa-trash"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
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
