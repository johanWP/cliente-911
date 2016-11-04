<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('nombre', 'Nombre:') }}
            {{ Form::text('nombre', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>

    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', '', ['class'=> 'form-control', 'placeholder'=> '(Opcional)']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('logo', 'Logo:') }}
            {{ Form::file('logo', ['class'=> 'form-control']) }}
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('entrenador_nombre', 'Entrenador:') }}
            {{ Form::text('entrenador_nombre', null, ['class' => 'form-control','placeholder' => 'Nombre y Apellido']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('entrenador_tlf', 'Teléfono:') }}
            {{ Form::text('entrenador_tlf', null, ['class' => 'form-control','placeholder' => 'Prefiera número celular']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('entrenador_email', 'Email:') }}
            {{ Form::text('entrenador_email', null, ['class' => 'form-control','placeholder' => 'Escriba una dirección válida']) }}
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('asistente_nombre', 'Asistente:') }}
            {{ Form::text('asistente_nombre', null, ['class' => 'form-control','placeholder' => 'Nombre y Apellido']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('asistente_tlf', 'Teléfono:') }}
            {{ Form::text('asistente_tlf', null, ['class' => 'form-control','placeholder' => 'Prefiera número celular']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('asistente_email', 'Email:') }}
            {{ Form::text('asistente_email', null, ['class' => 'form-control','placeholder' => 'Escriba una dirección válida']) }}
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