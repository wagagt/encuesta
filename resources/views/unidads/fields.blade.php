<!-- Institucione Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('institucione_id', 'Institucione Id:') !!}
    {!! Form::number('institucione_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefonos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefonos', 'Telefonos:') !!}
    {!! Form::text('telefonos', null, ['class' => 'form-control']) !!}
</div>

<!-- Personas Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personas_cantidad', 'Personas Cantidad:') !!}
    {!! Form::number('personas_cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Puestos Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puestos_cantidad', 'Puestos Cantidad:') !!}
    {!! Form::number('puestos_cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_ubicacion', 'Foto Ubicacion:') !!}
    {!! Form::text('foto_ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Personas Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_personas_ubicacion', 'Foto Personas Ubicacion:') !!}
    {!! Form::text('foto_personas_ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Notas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notas', 'Notas:') !!}
    {!! Form::textarea('notas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('unidads.index') !!}" class="btn btn-default">Cancel</a>
</div>
