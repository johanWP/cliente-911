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
        </div>
        <div class="row">
            <div class="col-sm-11">
            <div class="table-responsive">

                <table class="table table-striped table-hover" id="datatable">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Entrenador</th>
                        <th>Asistente</th>
                        <th>Email</th>
                        <th width="15%">&nbsp</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="#">Club Regatas de Santa Fe</a></td>
                        <td>Luke Cage</td>
                        <td>Jessica Jones</td>
                        <td>regatas@mail.com</td>
                        <td class="pull-right">
                            <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar liga"><i class="fa fa-2x fa-edit"></i></button>
                            {{--<button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Ver detalle"><i class="fa fa-2x fa-eye"></i></button>--}}
                            <button class="btn btn-danger"  data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-2x fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Club Atlético Independiente de Avellaneda</a></td>
                        <td>Danny Rand</td>
                        <td>Matt Murdock</td>
                        <td>hellsKitchen@mail.com</td>
                        <td class="pull-right">
                            <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar liga"><i class="fa fa-2x fa-edit"></i></button>
                            {{--<button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Ver detalle"><i class="fa fa-2x fa-eye"></i></button>--}}
                            <button class="btn btn-danger"  data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-2x fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Imperio</a></td>
                        <td>Wilson Fisk</td>
                        <td>Elektra Natchios</td>
                        <td>money@mail.com</td>
                        <td class="pull-right">
                            <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar liga"><i class="fa fa-2x fa-edit"></i></button>
                            {{--<button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Ver detalle"><i class="fa fa-2x fa-eye"></i></button>--}}
                            <button class="btn btn-danger"  data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-2x fa-trash"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>Estás seguro de borrar a <b>este club</b>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Borrar</button>
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