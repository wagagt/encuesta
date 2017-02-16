<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Sitio Web Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sitio_web', 'Sitio Web:') !!}
    {!! Form::text('sitio_web', null, ['class' => 'form-control']) !!}
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

<!-- Pregunta Final Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pregunta_final', 'Pregunta Final:') !!}
    {!! Form::textarea('pregunta_final', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Avance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_avance', 'Estado Avance:') !!}
    {!! Form::number('estado_avance', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('institucions.index') !!}" class="btn btn-default">Cancel</a>
</div>
