<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('nombre:', 'Nombre del Servicio:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'tabindex' => 1, 'required', 'autofocus']) !!}

</div>
<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('area_id', 'Clasificación:') !!}
    <select class="area_id form-control">
      <option value="AL">Uso</option>
      <option value="WY">Area</option>
      <option value="WY">Impacto</option>
    </select>

</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('direccion', 'Otra especifique:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'tabindex' => 2, 'required']) !!}

</div>


<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('telefonos', 'Descripcion:') !!}
    {!! Form::textarea('telefonos', null, ['class' => 'form-control', 'tabindex' => 3, 'required']) !!}

</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('puestos_cantidad', 'Expone muestra:') !!}
    {!! Form::text('puestos_cantidad', null, ['class' => 'form-control', 'tabindex' => 4, 'required']) !!}

</div>
<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('personas_cantidad', 'Cantidad de procedimientos:') !!}
    {!! Form::text('personas_cantidad', null, ['class' => 'form-control', 'tabindex' => 4, 'required']) !!}

</div>




