@extends('layouts.app')

@section('htmlheader_title')
    Club Regatas de Santa Fe
@endsection

@section('contentheader_title')
    Club Regatas de Santa Fe
@endsection

@section('otro-header')

    <link href="{{ asset('/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/jquery.dataTables_themeroller.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-sm-6"><h3><a href="#">Matt Murdock</a></h3> <strong>Entrenador</strong></div>
            <div class="col-sm-6"><h3><a href="#">Danny Rand</a></h3> <strong>Asistente</strong></div>
        </div>
    </div>

<p>&nbsp;</p>

    <div class="row">
{{--
        <div class="col-sm-6">
            <div class="box box-solid">
                <div class="box-header">
                    <i class="fa fa-bar-chart-o"></i>

                    <h3 class="box-title">jQuery Knob Tron Style</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        --}}
{{--<button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>--}}{{--

                        --}}
{{--</button>--}}{{--

                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-3 text-center">
                            <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="80%" data-height="120" data-fgColor="#3c8dbc" data-readonly="true">

                            <div class="knob-label">% Juegos ganados (Total)</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xs-6 col-md-3 text-center">
                            <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="80%" data-height="120" data-fgColor="#f56954"  data-readonly="true">

                            <div class="knob-label">% Juegos ganados de local</div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

--}}


        <div class="col-sm-6">


            <!-- BAR CHART -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Resumen</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 text-center">
                            {{--<input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="80%" data-height="120" data-fgColor="#3c8dbc" data-readonly="true">--}}
                            {{--<div class="knob-label">% Juegos ganados (Total)</div>--}}
                            <canvas id="diferenciaCanvas" style="height:250px"></canvas>
                            <p>Diferencia de Goles: +6</p>
                        </div>
                        <!-- ./col -->
                        <div class="col-xs-12 col-md-6 text-center">
                            {{--<input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="80%" data-height="120" data-fgColor="#f56954"  data-readonly="true">--}}
                            {{--<div class="knob-label">% Juegos ganados de local</div>--}}
                            <canvas id="ganadosCanvas" style="height:250px"></canvas>
                            <p>Ganados - Perdidos - Empatados: 12 - 8 - 2</p>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-sm-6">


            <!-- BAR CHART -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Ganados y Perdidos</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="barChart" style="height:230px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>


    </div>
    <!-- /.row -->


    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Resultados detallados</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>N. Juego</th>
                            <th>Vs.</th>
                            <th>Fecha</th>
                            <th>Resultado</th>
                            <th>Detalle</th>
                        </tr>
                        <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-success">Ganado</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                            <td>219</td>
                            <td>Alexander Pierce</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-warning">Protesta</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-success">Ganado</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                            <td>175</td>
                            <td>Mike Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-danger">Perdido</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('otros-scripts')
    <script src="{{ asset('/plugins/knob/jquery.knob.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/plugins/chartjs/Chart.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            //-------------
            //- BAR CHART -
            //-------------
            var areaChartData = {
                labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio"],
                datasets: [
                    {
                        label: "Ganados",
                        fillColor: "rgba(210, 214, 222, 1)",
                        strokeColor: "rgba(210, 214, 222, 1)",
                        pointColor: "rgba(210, 214, 222, 1)",
                        pointStrokeColor: "#c1c7d1",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [6, 5, 8, 8, 5, 5, 4]
                    },
                    {
                        label: "Perdidos",
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "rgba(60,141,188,1)",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(60,141,188,1)",
                        data: [2, 4, 1, 1, 3, 4, 5]
                    }
                ]
            };
            var barChartCanvas = $("#barChart").get(0).getContext("2d");
            var barChart = new Chart(barChartCanvas);
            var barChartData = areaChartData;
            barChartData.datasets[1].fillColor = "#00a65a";
            barChartData.datasets[1].strokeColor = "#00a65a";
            barChartData.datasets[1].pointColor = "#00a65a";
            var barChartOptions = {
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                scaleBeginAtZero: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: true,
                //String - Colour of the grid lines
                scaleGridLineColor: "rgba(0,0,0,.05)",
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: false,
                //Boolean - If there is a stroke on each bar
                barShowStroke: true,
                //Number - Pixel width of the bar stroke
                barStrokeWidth: 2,
                //Number - Spacing between each of the X value sets
                barValueSpacing: 5,
                //Number - Spacing between data sets within X values
                barDatasetSpacing: 1,
                legend: {
                    display: true,
                    labels: {
                        fontColor: 'rgb(255, 99, 132)'
                    }
                },

                //Boolean - whether to make the chart responsive
                responsive: true,
                maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);

//-------------
//- PIE CHART -
//-------------
// Get context with jQuery - using jQuery's .get() method.
    var ganadosCanvas = $("#ganadosCanvas").get(0).getContext("2d");
    var ganadosChart = new Chart(ganadosCanvas);
            var ganadosData = [
        {
            value: 8,
            color: "#a70000",
            highlight: "#d90000",
            label: "Perdidos"
        },
        {
            value: 12,
            color: "#008500",
            highlight: "#00ad00",
            label: "Ganados"
        },
        {
            value: 2,
            color: "#b8b9ba",
            highlight: "#b8b9ba",
            label: "Empatados"
        }
    ];
//            var pieChartCanvas = $("#diferenciaCanvas").get(0).getContext("2d");
//            var pieChart = new Chart(pieChartCanvas);
        var diferenciaCanvas = $("#diferenciaCanvas").get(0).getContext("2d");
        var diferenciaChart = new Chart(diferenciaCanvas);
            var diferenciaData = [
        {
            value: 28,
            color: "#a74c00",
            highlight: "#d96200",
            label: "En contra"
        },
        {
            value: 12,
            color: "#006464",
            highlight: "#008282",
            label: "A favor"
        },
    ];
    var pieOptions = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke: true,
        //String - The colour of each segment stroke
        segmentStrokeColor: "#fff",
        //Number - The width of each segment stroke
        segmentStrokeWidth: 2,
        //Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout: 50, // This is 0 for Pie charts
        //Number - Amount of animation steps
        animationSteps: 100,
        //String - Animation easing effect
        animationEasing: "easeOutBounce",
        //Boolean - Whether we animate the rotation of the Doughnut
        animateRotate: true,
        //Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale: false,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true,
        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //String - A legend template
        {{--legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"--}}
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    ganadosChart.Doughnut(ganadosData, pieOptions);
    diferenciaChart.Doughnut(diferenciaData, pieOptions);

        }); // fin del document.ready
    </script>
@endsection
