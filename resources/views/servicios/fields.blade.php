<!-- Unidade Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade_id', 'Unidade Id:') !!}
    {!! Form::number('unidade_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Bases Legale Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bases_legale_id', 'Bases Legale Id:') !!}
    {!! Form::number('bases_legale_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Otra Base Legal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otra_base_legal', 'Otra Base Legal:') !!}
    {!! Form::text('otra_base_legal', null, ['class' => 'form-control']) !!}
</div>

<!-- Clasificacione Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clasificacione_id', 'Clasificacione Id:') !!}
    {!! Form::number('clasificacione_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Otra Clasificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otra_clasificacion', 'Otra Clasificacion:') !!}
    {!! Form::text('otra_clasificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Expone Muestra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expone_muestra', 'Expone Muestra:') !!}
    {!! Form::text('expone_muestra', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Procedimientos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_procedimientos', 'Cantidad Procedimientos:') !!}
    {!! Form::number('cantidad_procedimientos', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('servicios.index') !!}" class="btn btn-default">Cancel</a>
</div>
