<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('nombre', 'Nombre:') }}
            {{ Form::text('nombre', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('descripcion', 'Desxripción:') }}
            {{ Form::text('descripcion', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Date:</label>

            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker">
            </div>
            <!-- /.input group -->
        </div>
        <!-- /.form group -->

    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('fecha_fin', 'Fecha de Finalización:') }}
            {{ Form::text('fecha_fin', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-sm-offset-6 text-right">
        <a href="/usuarios/" class="btn btn-default"><i class="fa fa-ban fa-lg"></i> Cancelar</a>
        &nbsp;
        <button class="btn btn-primary"><i class="fa fa-plus fa-lg"></i> Crear nuevo usuario</button>
    </div>
</div>