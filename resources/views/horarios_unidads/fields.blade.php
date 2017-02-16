<!-- Unidade Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade_id', 'Unidade Id:') !!}
    {!! Form::number('unidade_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Dia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dia', 'Dia:') !!}
    {!! Form::text('dia', null, ['class' => 'form-control']) !!}
</div>

<!-- Entrada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entrada', 'Entrada:') !!}
    {!! Form::text('entrada', null, ['class' => 'form-control']) !!}
</div>

<!-- Salida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salida', 'Salida:') !!}
    {!! Form::text('salida', null, ['class' => 'form-control']) !!}
</div>

<!-- Medio Dia Cierra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medio_dia_cierra', 'Medio Dia Cierra:') !!}
    {!! Form::text('medio_dia_cierra', null, ['class' => 'form-control']) !!}
</div>

<!-- Medio Dia Abre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medio_dia_abre', 'Medio Dia Abre:') !!}
    {!! Form::text('medio_dia_abre', null, ['class' => 'form-control']) !!}
</div>

<!-- Notas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notas', 'Notas:') !!}
    {!! Form::textarea('notas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('horariosUnidads.index') !!}" class="btn btn-default">Cancel</a>
</div>
