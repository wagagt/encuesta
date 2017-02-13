<!-- Resultado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resultado_id', 'Resultado Id:') !!}
    {!! Form::number('resultado_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Imagen Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imagen_ubicacion', 'Imagen Ubicacion:') !!}
    {!! Form::text('imagen_ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('imagenResultados.index') !!}" class="btn btn-default">Cancel</a>
</div>
