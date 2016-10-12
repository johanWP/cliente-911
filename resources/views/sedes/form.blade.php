<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('nombre', 'Nombre:') }}
            {{ Form::text('nombre', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('direccion', 'Dirección:') }}
            {{ Form::text('direccion', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('ciudad', 'Ciudad:') }}
            {{ Form::text('ciudad', '', ['class'=> 'form-control', 'placeholder'=> '(Requerido)']) }}
        </div>

    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('provincia', 'Provincia:') }}
            {{ Form::select('provincia', ['L' => 'Ciudad de Buenos Aires', 'S' => 'Cordoba'], null, ['class'=>'form-control','placeholder' => 'Seleccione...']) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-sm-offset-6 text-right">
        <a href="/usuarios/" class="btn btn-default"><i class="fa fa-ban fa-lg"></i> Cancelar</a>
        &nbsp;
        <button class="btn btn-primary"><i class="fa fa-plus fa-lg"></i>  {!! $textoBoton !!}</button>
    </div>
</div>