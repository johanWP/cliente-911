<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('nombre', 'Nombre:') }}
            {{ Form::text('nombre', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('apellido', 'Apellido:') }}
            {{ Form::text('apellido', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('email', 'Correo Electrónico:') }}
            {{ Form::text('email', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('telefono', 'Teléfono:') }}
            {{ Form::text('telefono', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>
    </div>
</div>
<div class="col-sm-12 checkbox">
    <label for="estatus">
        {{ Form::checkbox('estatus', 'A', true) }}
        Seleccione si el usuario está activo
    </label>
</div>
<div class="row">
    <div class="col-sm-6 col-sm-offset-6 text-right">
        <a href="/usuarios/" class="btn btn-default"><i class="fa fa-ban fa-lg"></i> Cancelar</a>
        &nbsp;
        <button class="btn btn-primary"><i class="fa fa-plus fa-lg"></i> Crear nuevo usuario</button>
    </div>
</div>