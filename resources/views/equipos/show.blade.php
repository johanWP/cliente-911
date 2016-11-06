@extends('layouts.app')

@section('htmlheader_title')
    Club Regatas de Santa Fe
@endsection

@section('contentheader_title')
    Perfil del Equipo
@endsection

@section('otro-header')

    <link href="{{ asset('/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/jquery.dataTables_themeroller.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('main-content')
<div class="container spark-screen">
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="/img/ca_river_plate2.png" alt="User profile picture">

                        <h3 class="profile-username text-center">Club Atlético River Plate</h3>

                        <p class="text-muted text-center">Buenos Aires, Argentina</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Juegos ganados</b> <a class="pull-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Juegos perdidos</b> <a class="pull-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Juegos empatados</b> <a class="pull-right">13,287</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- Datos de contactoBox -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Datos de Contacto</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> Entrenador / Asistente</strong>

                        <p class="text-muted">
                            <a href="#">Matthew Murdock</a><br>
                            11 - 6677 8899 <br>
                            daredevil@marvel.com
                        </p>
                        <p class="text-muted">
                            <a href="#">Jessica Jones</a><br>
                            11 - 6677 8899 <br>
                            jess@marvel.com
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>

                        <p class="text-muted">Beverly Hills 90210, Malibu, California</p>

                        <hr>

                        <strong><i class="fa fa-trophy margin-r-5"></i> Ligas</strong>

                        <p>
                            <span class="label label-danger">Metro B</span>
                            <span class="label label-success">Metro C</span>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notas</strong>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                        <a href="#" class="btn btn-primary btn-block"><b>Editar</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#timeline" data-toggle="tab">Actividad</a></li>
                        <li><a href="#graph" data-toggle="tab">Estadísticas</a></li>
                        <li><a href="#settings" data-toggle="tab">Mensaje Rápido</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="graph">
                            <!-- Post -->
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="/img/user1-128x128.jpg" alt="user image">
                                    <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore the hate as they create awesome
                                    tools to help create filler text for everyone from bacon lovers
                                    to Charlie Sheen fans.
                                </p>
                                <ul class="list-inline">
                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                    </li>
                                    <li class="pull-right">
                                        <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                            (5)</a></li>
                                </ul>

                                <input class="form-control input-sm" type="text" placeholder="Type a comment">
                            </div>
                            <!-- /.post -->

                            <!-- Post -->
                            <div class="post clearfix">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="/img/user7-128x128.jpg" alt="User Image">
                                    <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                                    <span class="description">Sent you a message - 3 days ago</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore the hate as they create awesome
                                    tools to help create filler text for everyone from bacon lovers
                                    to Charlie Sheen fans.
                                </p>

                                <form class="form-horizontal">
                                    <div class="form-group margin-bottom-none">
                                        <div class="col-sm-9">
                                            <input class="form-control input-sm" placeholder="Response">
                                        </div>
                                        <div class="col-sm-3">
                                            <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.post -->

                            <!-- Post -->
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="/img/user6-128x128.jpg" alt="User Image">
                                    <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                                    <span class="description">Posted 5 photos - 5 days ago</span>
                                </div>
                                <!-- /.user-block -->
                                <div class="row margin-bottom">
                                    <div class="col-sm-6">
                                        <img class="img-responsive" src="/img/photo1.png" alt="Photo">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img class="img-responsive" src="/img/photo2.png" alt="Photo">
                                                <br>
                                                <img class="img-responsive" src="/img/photo3.jpg" alt="Photo">
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-6">
                                                <img class="img-responsive" src="/img/photo4.jpg" alt="Photo">
                                                <br>
                                                <img class="img-responsive" src="/img/photo1.png" alt="Photo">
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <ul class="list-inline">
                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                    </li>
                                    <li class="pull-right">
                                        <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                            (5)</a></li>
                                </ul>

                                <input class="form-control input-sm" type="text" placeholder="Type a comment">
                            </div>
                            <!-- /.post -->
                        </div>
                        <!-- /.tab-pane -->
                        <div class="active tab-pane" id="timeline">
                            <!-- The timeline -->
                            <ul class="timeline timeline-inverse">
                                <!-- timeline time label -->
                                <li class="time-label">
                        <span class="bg-aqua">
                          10 Feb. 2014
                        </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-check bg-green"></i>

                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 20:05</span>

                                        <h3 class="timeline-header">Visitante Vs. <a href="#">Argentinos Jr.</a></h3>

                                        <div class="timeline-body">
                                            <div class="col-sm-6">
                                                <p>Resultado Final:</p>
                                                <p>Argentinos Jr. 8 - 10 Club Atlético River Plate</p>
                                            </div>

                                            <div class="col-sm-6">
                                                <p>Arbitros:</p>
                                                <p>Maximiliano Palacio <br>
                                                Chiquito Crescente
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-xs">Ver más detalles</a>

                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <li class="time-label">
                        <span class="bg-aqua">
                          3 Feb. 2014
                        </span>
                                </li>
                                <!-- /.timeline-label -->

                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-close bg-red"></i>

                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 20:05</span>

                                        <h3 class="timeline-header">Local Vs. <a href="#">Gimnasia y Esgrima de Buenos Aires</a></h3>

                                        <div class="timeline-body">
                                            <div class="col-sm-6">
                                                <p>Resultado Final:</p>
                                                <p>Gimnasia y Esgrima de Buenos Aires 12 - 10 Club Atlético River Plate</p>
                                            </div>

                                            <div class="col-sm-6">
                                                <p>Arbitros:</p>
                                                <p>Maximiliano Palacio <br>
                                                Chiquito Crescente
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-xs">Ver más detalles</a>

                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <li class="time-label">
                        <span class="bg-aqua">
                          25 Ene. 2014
                        </span>
                                </li>
                                <!-- /.timeline-label -->

                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-minus bg-grey"></i>

                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 20:05</span>

                                        <h3 class="timeline-header">Visitante Vs. <a href="#">Imperio</a></h3>

                                        <div class="timeline-body">
                                            <div class="col-sm-6">
                                                <p>Resultado Final:</p>
                                                <p>Imperio 8 - 8 Club Atlético River Plate</p>
                                            </div>

                                            <div class="col-sm-6">
                                                <p>Arbitros:</p>
                                                <p>Maximiliano Palacio <br>
                                                Chiquito Crescente
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-xs">Ver más detalles</a>

                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <li>
                                    <i class="fa fa-clock-o bg-gray"></i>
                                </li>
                            </ul>
                            <ul>
                                <li>14-Ene-2014 Visitante Vs. Gimnasia y Esgrima de Rosario</li>
                                <li>14-Ene-2014 Visitante Vs. Gimnasia y Esgrima de Rosario</li>
                                <li>14-Ene-2014 Visitante Vs. Gimnasia y Esgrima de Rosario</li>
                                <li>14-Ene-2014 Visitante Vs. Gimnasia y Esgrima de Rosario</li>
                            </ul>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
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
