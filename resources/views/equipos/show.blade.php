@extends('layouts.app')

@section('htmlheader_title')
    Club Regatas de Santa Fe
@endsection

@section('contentheader_title')
    Perfil del Equipo?
@endsection

@section('otro-header')

    <link href="{{ asset('/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/jquery.dataTables_themeroller.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('main-content')
<div class="container spark-screen" id="container">
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

                        <datos_contacto user_id="1" titulo="Entrenador"></datos_contacto>
                        <datos_contacto user_id="2" titulo="Asistente"></datos_contacto>

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
            <div class="col-md-9"   >
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#timeline" data-toggle="tab">Actividad</a></li>
                        <li><a href="#graph" data-toggle="tab">Estadísticas</a></li>
                        <li><a href="#settings" data-toggle="tab">Mensaje Rápido</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="graph">
                            {{--<!-- Post -->--}}
                            {{--<div class="post">--}}
                                {{--<div class="user-block">--}}
                                    {{--<img class="img-circle img-bordered-sm" src="/img/user1-128x128.jpg" alt="user image">--}}
                                    {{--<span class="username">--}}
                          {{--<a href="#">Jonathan Burke Jr.</a>--}}
                          {{--<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>--}}
                        {{--</span>--}}
                                    {{--<span class="description">Shared publicly - 7:30 PM today</span>--}}
                                {{--</div>--}}
                                {{--<!-- /.user-block -->--}}
                                {{--<p>--}}
                                    {{--Lorem ipsum represents a long-held tradition for designers,--}}
                                    {{--typographers and the like. Some people hate it and argue for--}}
                                    {{--its demise, but others ignore the hate as they create awesome--}}
                                    {{--tools to help create filler text for everyone from bacon lovers--}}
                                    {{--to Charlie Sheen fans.--}}
                                {{--</p>--}}
                                {{--<ul class="list-inline">--}}
                                    {{--<li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>--}}
                                    {{--<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="pull-right">--}}
                                        {{--<a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments--}}
                                            {{--(5)</a></li>--}}
                                {{--</ul>--}}

                                {{--<input class="form-control input-sm" type="text" placeholder="Type a comment">--}}
                            {{--</div>--}}
                            {{--<!-- /.post -->--}}

                            {{--<!-- Post -->--}}
                            {{--<div class="post clearfix">--}}
                                {{--<div class="user-block">--}}
                                    {{--<img class="img-circle img-bordered-sm" src="/img/user7-128x128.jpg" alt="User Image">--}}
                                    {{--<span class="username">--}}
                          {{--<a href="#">Sarah Ross</a>--}}
                          {{--<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>--}}
                        {{--</span>--}}
                                    {{--<span class="description">Sent you a message - 3 days ago</span>--}}
                                {{--</div>--}}
                                {{--<!-- /.user-block -->--}}
                                {{--<p>--}}
                                    {{--Lorem ipsum represents a long-held tradition for designers,--}}
                                    {{--typographers and the like. Some people hate it and argue for--}}
                                    {{--its demise, but others ignore the hate as they create awesome--}}
                                    {{--tools to help create filler text for everyone from bacon lovers--}}
                                    {{--to Charlie Sheen fans.--}}
                                {{--</p>--}}

                                {{--<form class="form-horizontal">--}}
                                    {{--<div class="form-group margin-bottom-none">--}}
                                        {{--<div class="col-sm-9">--}}
                                            {{--<input class="form-control input-sm" placeholder="Response">--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-3">--}}
                                            {{--<button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                            {{--<!-- /.post -->--}}

                            {{--<!-- Post -->--}}
                            {{--<div class="post">--}}
                                {{--<div class="user-block">--}}
                                    {{--<img class="img-circle img-bordered-sm" src="/img/user6-128x128.jpg" alt="User Image">--}}
                                    {{--<span class="username">--}}
                          {{--<a href="#">Adam Jones</a>--}}
                          {{--<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>--}}
                        {{--</span>--}}
                                    {{--<span class="description">Posted 5 photos - 5 days ago</span>--}}
                                {{--</div>--}}
                                {{--<!-- /.user-block -->--}}
                                {{--<div class="row margin-bottom">--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<img class="img-responsive" src="/img/photo1.png" alt="Photo">--}}
                                    {{--</div>--}}
                                    {{--<!-- /.col -->--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-6">--}}
                                                {{--<img class="img-responsive" src="/img/photo2.png" alt="Photo">--}}
                                                {{--<br>--}}
                                                {{--<img class="img-responsive" src="/img/photo3.jpg" alt="Photo">--}}
                                            {{--</div>--}}
                                            {{--<!-- /.col -->--}}
                                            {{--<div class="col-sm-6">--}}
                                                {{--<img class="img-responsive" src="/img/photo4.jpg" alt="Photo">--}}
                                                {{--<br>--}}
                                                {{--<img class="img-responsive" src="/img/photo1.png" alt="Photo">--}}
                                            {{--</div>--}}
                                            {{--<!-- /.col -->--}}
                                        {{--</div>--}}
                                        {{--<!-- /.row -->--}}
                                    {{--</div>--}}
                                    {{--<!-- /.col -->--}}
                                {{--</div>--}}
                                {{--<!-- /.row -->--}}

                                {{--<ul class="list-inline">--}}
                                    {{--<li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>--}}
                                    {{--<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="pull-right">--}}
                                        {{--<a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments--}}
                                            {{--(5)</a></li>--}}
                                {{--</ul>--}}

                                {{--<input class="form-control input-sm" type="text" placeholder="Type a comment">--}}
                            {{--</div>--}}
                            {{--<!-- /.post -->--}}
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
<script type="x-template" id="datos_contacto-template">
    <div  v-if="!editing" style="margin-bottom: 2em">
    <strong><i class="fa fa-book margin-r-5"></i> @{{ titulo }}</strong>
        <p class="text-muted">
            <span id="span_nombre">@{{ nombre }}</span><br>
            <span id="span_tlf">@{{ telefono }}</span><br>
            <a href="#" id="span_email">@{{ email }}</a><br>
        </p>
        <button class="btn btn-primary btn-xs" @click.prevent="edit">Edición Rápida</button>
    </div>
    <div class="form-group-sm" v-else>
        <form action="" >
            <strong><i class="fa fa-book margin-r-5"></i> @{{ titulo }}</strong>
            <input type="text" id="txtNombre" v-model="nombre" class="form-control">
            <input type="text" id="txtTlf" v-model="telefono"  class="form-control">
            <input type="text" id="txtEmail" v-model="email"  class="form-control">
            <div class="row" style="margin-top: 1em">
                <div class="col-xs-6"><p><button class="btn btn-default btn-xs" @click.prevent="edit">Cancelar</button></p></div>
                <div class="col-xs-6"><p><button class="btn btn-primary btn-xs" @click.prevent="edit">Guardar</button></p></div>
            </div>
        </form>
    </div>
</script>
<script src="{{ asset('/plugins/knob/jquery.knob.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/chartjs/Chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/vue/datos_contacto.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
    }); // fin del document.ready
</script>
@endsection
