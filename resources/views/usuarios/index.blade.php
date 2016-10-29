@extends('layouts.app')

@section('htmlheader_title')
    Usuarios
@endsection

@section('contentheader_title')
    Usuarios registrados
@endsection

@section('otro-header')

@endsection

@section('main-content')
    <div class="container spark-screen" id="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Usuarios registrados</span>
                        <span class="info-box-number">3</span>
                        <span class="info-box-number"><a href="/usuarios/create">Registrar nuevo</a></span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div>
        </div>
        <!-- /.row -->

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
                                        <th>Nombre</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox" id="1" name="1"></td>
                                        <td><a href="/equipos/show/">Club Regatas de Santa Fe</a></td>
                                        <td>Dorrego 1640, CABA</td>
                                        <td>15 - 4545 6767</td>
                                        <td>regatas@mail.com</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="2" name="2"></td>
                                        <td><a href="/equipos/show/">Club Atlético Independiente de Avellaneda</a></td>
                                        <td>Av. Bernabé Marquez 504, San Isidro, Buenos Aires</td>
                                        <td>11 - 1234 5678</td>
                                        <td>hellsKitchen@mail.com</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="3" name="3"></td>
                                        <td><a href="/equipos/show/">Asociación Atlética Argentinos Junior</a></td>
                                        <td>Tronador 41, Ciudad de Buenos Aires, Buenos Aires</td>
                                        <td>15 - 9078 5634</td>
                                        <td>money@mail.com</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> {{--  fin del col-sm-12 --}}
                    </div> {{--fin del row--}}

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">

                                <table class="table table-hover" id="datatable" name="datatable">
                                    <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll" name="selectAll" value="all"></th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th>Perfil</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox" id="1" name="1"></td>
                                        <td><a href="/equipos/show/">Danny Rand</a></td>
                                        <td><p>danny_rand@ironfist.com</p></td>
                                        <td><p>11 - 6677 8899</p></td>
                                        <td><p>Entrenador</p></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="2" name="2"></td>
                                        <td><a href="/equipos/show/">Danny Rand</a></td>
                                        <td><p>danny_rand@ironfist.com</p></td>
                                        <td><p>11 - 6677 8899</p></td>
                                        <td><p>Entrenador</p></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="3" name="3"></td>
                                        <td><a href="/equipos/show/">Danny Rand</a></td>
                                        <td><p>danny_rand@ironfist.com</p></td>
                                        <td><p>11 - 6677 8899</p></td>
                                        <td><p>Entrenador</p></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> {{--  fin del col-sm-12 --}}
                    </div> {{--fin del row--}}

                </div>

                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.row -->
    </div>


@endsection

@section('otros-scripts')
    {{--<script src="{{ asset('/js/vue.js') }}" type="text/javascript"></script>--}}
    {{--<script src="{{ asset('/js/main.js') }}" type="text/javascript"></script>--}}
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        }); // fin del document.ready
    </script>
@endsection
