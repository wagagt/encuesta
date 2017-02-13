<!-- Tipo Resultado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_resultado_id', 'Tipo Resultado Id:') !!}
    {!! Form::number('tipo_resultado_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Paso Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paso_id', 'Paso Id:') !!}
    {!! Form::number('paso_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('resultados.index') !!}" class="btn btn-default">Cancel</a>
</div>
