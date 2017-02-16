<!-- Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area_id', 'Area Id:') !!}
    {!! Form::number('area_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Evaluacion Criterio1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('evaluacion_criterio1', 'Evaluacion Criterio1:') !!}
    {!! Form::text('evaluacion_criterio1', null, ['class' => 'form-control']) !!}
</div>

<!-- Evaluacion Criterio2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('evaluacion_criterio2', 'Evaluacion Criterio2:') !!}
    {!! Form::text('evaluacion_criterio2', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_ubicacion', 'Foto Ubicacion:') !!}
    {!! Form::text('foto_ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Notas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notas', 'Notas:') !!}
    {!! Form::textarea('notas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areaSpecs.index') !!}" class="btn btn-default">Cancel</a>
</div>
