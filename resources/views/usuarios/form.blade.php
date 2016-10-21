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
    <div class="col-sm-6">
        <h3>Perfil del usuario</h3>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                Jugador(a)
            </label>
            <a tabindex="0" class="btn btn-xs btn-default pop" role="button" data-toggle="popover" data-trigger="focus" title="Características del rol" data-content="Este rol puede hacer muchas cosas interesantes y no deja que el usuario meta la pata"><i class="fa fa-question-circle"></i> </a>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1" checked>
                Entrenador(a) / Asistente
            </label>
            <a tabindex="0" class="btn btn-xs btn-default pop" role="button" data-toggle="popover" data-trigger="focus" title="Características del rol" data-content="Este rol puede hacer muchas cosas interesantes y no deja que el usuario meta la pata"><i class="fa fa-question-circle"></i> </a>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option1" checked>
                Árbitro(a) / Juez
            </label>
            <a tabindex="0" class="btn btn-xs btn-default pop" role="button" data-toggle="popover" data-trigger="focus" title="Características del rol" data-content="Este rol puede hacer muchas cosas interesantes y no deja que el usuario meta la pata"><i class="fa fa-question-circle"></i> </a>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" checked>
                Administrador de Liga
            </label>
            <a tabindex="0" class="btn btn-xs btn-default pop" role="button" data-toggle="popover" data-trigger="focus" title="Características del rol" data-content="Este rol puede hacer muchas cosas interesantes y no deja que el usuario meta la pata"><i class="fa fa-question-circle"></i> </a>
        </div>

    </div>
    <div class="col-sm-6">
        <h3>Autorizar ligas</h3>

        <div id="divLigas">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Liga sub 12
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Liga sub 14
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Liga sub 16
                </label>
            </div><div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    FEWABA Campeonato Nacional Sub 18
                </label>
            </div><div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Liga sub 20
                </label>
            </div><div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Metropolitana C
                </label>
            </div><div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    FEWABA liga Metropolitana Categoría B
                </label>
            </div><div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Liga Metropolitana A
                </label>
            </div><div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Liga de Honor
                </label>
            </div><div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    Liga sub
                </label>
            </div>
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