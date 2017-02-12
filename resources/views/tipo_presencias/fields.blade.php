<!-- Paso Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paso_id', 'Paso Id:') !!}
    {!! Form::number('paso_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Minimo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('minimo', 'Minimo:') !!}
    {!! Form::number('minimo', null, ['class' => 'form-control']) !!}
</div>

<!-- Maximo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('maximo', 'Maximo:') !!}
    {!! Form::number('maximo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipoPresencias.index') !!}" class="btn btn-default">Cancel</a>
</div>
