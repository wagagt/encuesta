<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('nombre:', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'tabindex' => 1, 'required', 'autofocus']) !!}

</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('titulo_cargo', 'Título:') !!}
    {!! Form::text('titulo_cargo', null, ['class' => 'form-control', 'tabindex' => 2, 'required']) !!}

</div>


<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'tabindex' => 3, 'required']) !!}

</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('telefono_directo', 'Teléfono Directo:') !!}
    {!! Form::text('telefono_directo', null, ['class' => 'form-control', 'tabindex' => 4, 'required']) !!}

</div>




