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
                        <span class="info-box-number" id="spanTotal"></span>
                        <span class="info-box-number"><a href="/equipos/create">Registrar nuevo</a></span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div>
        </div> {{-- Fin del row --}}
        <div class="row">
            <div class="box box-default">
                <div class="box-header with-border">
                    <button class="btn btn-default" id="btnEliminar"><i class="fa fa-trash"></i> Eliminar</button>
                </div>
                <!-- /.box-header -->
                <div class="box-body" id="divBoxBody">
                    <div class="text-center" id="divSpinner"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
                        <span class="sr-only">Loading...</span></div>
                    <div class="row" id="divTable">
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
            $('#btnEliminar').hide();
            $('#divTable').hide();
            var jqxhr = $.ajax( "/api/getEquipos/" )
                    .done(function(msg) {
                        var totalEquipos =0;
                        $.each(msg, function(k, fila) {
                            totalEquipos++;
                            nuevoTr = '<tr> <td><input type="checkbox" id="'+fila.id+'" name="'+fila.id+'" value="0"></td>' +
                                    '<td>' + fila.nombre +'</td>' +
                                    '<td>' + fila.entrenador + '</td>' +
                                    '<td>' + fila.asistente + '</td>' +
                                    '<td>' + fila.email + '</td>' +
                                    '</tr>';
                            $("#datatable tbody").append(nuevoTr);
                        });
                        $('#datatable').DataTable();
                        $('#spanTotal').html(totalEquipos);
                        $('#btnEliminar').fadeIn();
                        $('#divTable').fadeIn();
                        $('#divSpinner').fadeOut();
                    })
                    .fail(function() {
//                        alert( "error" );
                    })
                    .always(function() {
//                        alert( "complete" );
                    });


            $('#selectAll').click(function(e){
                var table= $(e.target).closest('table');
                $('td input:checkbox',table).prop('checked',this.checked);
            });


//            $("#tblEntAttributes tbody").append(newRowContent);

        }); // fin del document.ready
    </script>
@endsection
