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

<!-- Puesto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puesto', 'Puesto:') !!}
    {!! Form::text('puesto', null, ['class' => 'form-control']) !!}
</div>

<!-- Recibe Del Paso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recibe_del_paso', 'Recibe Del Paso:') !!}
    {!! Form::text('recibe_del_paso', null, ['class' => 'form-control']) !!}
</div>

<!-- Entrega Al Paso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entrega_al_paso', 'Entrega Al Paso:') !!}
    {!! Form::text('entrega_al_paso', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ejecutors.index') !!}" class="btn btn-default">Cancel</a>
</div>
