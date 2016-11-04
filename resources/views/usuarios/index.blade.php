@extends('layouts.app')

@section('htmlheader_title')
    Ligas
@endsection

@section('contentheader_title')
    Mis Ligas
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
                    <span class="info-box-text">Ligas registradas</span>
                    <span class="info-box-number">3</span>
                    <span class="info-box-number"><a href="/ligas/create">Registrar nueva</a></span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div>
    </div>
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
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Descripción</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="checkbox" id="1" name="1"></td>
                                    <td><a href="/equipos/show/">Campeonato Nacional Sub 14</a></td>
                                    <td>31-10-2016</td>
                                    <td>04-11-2016</td>
                                    <td>regatas@mail.com</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="2" name="2"></td>
                                    <td><a href="/equipos/show/">Liga Larense de Polo Acuático</a></td>
                                    <td>13-02-2015</td>
                                    <td>13-03-2015</td>
                                    <td>hellsKitchen@mail.com</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="3" name="3"></td>
                                    <td><a href="/equipos/show/">II Encuentro regional de equipos hispanos</a></td>
                                    <td>22-01-2011</td>
                                    <td>28-06-2014</td>
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
            $('#selectAll').click(function(e){
                var table= $(e.target).closest('table');
                $('td input:checkbox',table).prop('checked',this.checked);
            });

        }); // fin del document.ready
    </script>
@endsection