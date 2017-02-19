<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    <h4>Nueva Institucion</h4>
</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('nombre', 'Nombre de unidad:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'tabindex' => 1, 'required', 'autofocus']) !!}

</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('sitio_web', 'Dirección:') !!}
    {!! Form::text('sitio_web', null, ['class' => 'form-control', 'tabindex' => 2, 'required']) !!}
</div>


<div class="form-group col-xs-6 col-sm-6 col-sm-6">
    {!! Form::label('direccion', 'No. Puestos:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'tabindex' => 3, 'required']) !!}

</div>

<div class="form-group col-xs-6 col-sm-6 col-sm-6">
    {!! Form::label('telefonos', 'No. Personas:') !!}
    {!! Form::text('telefonos', null, ['class' => 'form-control', 'tabindex' => 4, 'required']) !!}
</div>