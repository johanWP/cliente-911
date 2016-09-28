<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('nombre', 'Nombre:') }}
            {{ Form::text('nombre', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('entrenador_id', 'Entrenador:') }}
            {{ Form::select('entrenador_id', ['Luke' => 'Luke Cage', 'Jessica Jones' => 'Jessica Jones'], null, ['placeholder' => 'Selecciona...']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('asistente_id', 'Asistente:') }}
            {{ Form::select('asistente_id', ['L' => 'Luke Cage', 'S' => 'Matt Murdock'], null, ['placeholder' => 'Selecciona...']) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-sm-offset-6 text-right">
        <a href="/usuarios/" class="btn btn-default"><i class="fa fa-ban fa-lg"></i> Cancelar</a>
        &nbsp;
        <button class="btn btn-primary"><i class="fa fa-plus fa-lg"></i> Crear nuevo equipo</button>
    </div>
</div>