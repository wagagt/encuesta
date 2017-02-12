<!-- Requerido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('requerido', 'Requerido:') !!}
    {!! Form::text('requerido', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Enunciado Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('enunciado', 'Enunciado:') !!}
    {!! Form::textarea('enunciado', null, ['class' => 'form-control']) !!}
</div>

<!-- Rango Respuestas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('rango_respuestas', 'Rango Respuestas:') !!}
    {!! Form::textarea('rango_respuestas', null, ['class' => 'form-control']) !!}
</div>

<!-- Respuesta Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('respuesta', 'Respuesta:') !!}
    {!! Form::textarea('respuesta', null, ['class' => 'form-control']) !!}
</div>

<!-- Notas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notas', 'Notas:') !!}
    {!! Form::textarea('notas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('requisitosPuestos.index') !!}" class="btn btn-default">Cancel</a>
</div>
