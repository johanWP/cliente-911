@extends('layouts.app')

@section('htmlheader_title')
    Sedes
@endsection

@section('contentheader_title')
    Sedes
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
                    {{--Apply any bg-* class to to the icon to color it --}}
                    <span class="info-box-icon bg-green"><i class="fa fa-map-marker"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Sedes registradas</span>
                        <span class="info-box-number">3</span>
                        <span class="info-box-number"><a href="/ligas/create">Registrar nueva</a></span>
                    </div> {{--fin del /.info-box-content--}}
                </div> {{--fin del info-box--}}
            </div>
        </div>
        {{--fin del row--}}
        <div class="row">
            <div class="box box-default">
                <div class="box-header with-border">
                    <button class="btn btn-default"><i class="fa fa-trash"></i> Eliminar</button>
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
                </div>  {{-- fin del box-body --}}
            </div>  {{--fin del box--}}
        </div> {{-- fin del row--}}

    </div> {{--fin del container--}}


@endsection

@section('otros-scripts')
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
            $('#selectAll').click(function(e){
                var table= $(e.target).closest('table');
                $('td input:checkbox',table).prop('checked',this.checked);
            });

        }); // fin del document.ready
    </script>
@endsection
