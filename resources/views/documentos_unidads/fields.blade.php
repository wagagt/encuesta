<!-- Unidade Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade_id', 'Unidade Id:') !!}
    {!! Form::number('unidade_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_documento', 'Tipo Documento:') !!}
    {!! Form::text('tipo_documento', null, ['class' => 'form-control']) !!}
</div>

<!-- Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ubicacion', 'Ubicacion:') !!}
    {!! Form::text('ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Notas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notas', 'Notas:') !!}
    {!! Form::textarea('notas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('documentosUnidads.index') !!}" class="btn btn-default">Cancel</a>
</div>
