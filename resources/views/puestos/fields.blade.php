<!-- Unidade Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade_id', 'Unidade Id:') !!}
    {!! Form::number('unidade_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Personas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_personas', 'Cantidad Personas:') !!}
    {!! Form::number('cantidad_personas', null, ['class' => 'form-control']) !!}
</div>

<!-- Jefe Inmediato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jefe_inmediato', 'Jefe Inmediato:') !!}
    {!! Form::text('jefe_inmediato', null, ['class' => 'form-control']) !!}
</div>

<!-- Reporta A Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reporta_a', 'Reporta A:') !!}
    {!! Form::text('reporta_a', null, ['class' => 'form-control']) !!}
</div>

<!-- Objetivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('objetivo', 'Objetivo:') !!}
    {!! Form::textarea('objetivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Supervisa A Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supervisa_a', 'Supervisa A:') !!}
    {!! Form::text('supervisa_a', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('puestos.index') !!}" class="btn btn-default">Cancel</a>
</div>
