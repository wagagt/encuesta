<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('nombre:', 'Nombre del Puesto:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'tabindex' => 1, 'required', 'autofocus']) !!}

</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('direccion', 'Puesto del Jefe Inmediato:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'tabindex' => 2, 'required']) !!}

</div>


<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('telefonos', 'A quién reporta el Jefe Inmediato:') !!}
    {!! Form::text('telefonos', null, ['class' => 'form-control', 'tabindex' => 3, 'required']) !!}

</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('puestos_cantidad', 'Teléfonos:') !!}
    {!! Form::text('puestos_cantidad', null, ['class' => 'form-control', 'tabindex' => 4, 'required']) !!}

</div>
<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('personas_cantidad', 'Cantidad de Personas por puesto:') !!}
    {!! Form::text('personas_cantidad', null, ['class' => 'form-control', 'tabindex' => 4, 'required']) !!}

</div>




