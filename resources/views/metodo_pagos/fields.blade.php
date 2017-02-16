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
    <a href="{!! route('metodoPagos.index') !!}" class="btn btn-default">Cancel</a>
</div>
