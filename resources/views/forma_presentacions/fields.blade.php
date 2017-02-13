<!-- Forma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('forma', 'Forma:') !!}
    {!! Form::text('forma', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Presentacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_presentacion', 'Tipo Presentacion:') !!}
    {!! Form::text('tipo_presentacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('formaPresentacions.index') !!}" class="btn btn-default">Cancel</a>
</div>
