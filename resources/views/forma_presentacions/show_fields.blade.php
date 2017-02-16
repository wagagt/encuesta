<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $formaPresentacion->id !!}</p>
</div>

<!-- Forma Field -->
<div class="form-group">
    {!! Form::label('forma', 'Forma:') !!}
    <p>{!! $formaPresentacion->forma !!}</p>
</div>

<!-- Tipo Presentacion Field -->
<div class="form-group">
    {!! Form::label('tipo_presentacion', 'Tipo Presentacion:') !!}
    <p>{!! $formaPresentacion->tipo_presentacion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $formaPresentacion->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $formaPresentacion->updated_at !!}</p>
</div>

