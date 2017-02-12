<!-- Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area_id', 'Area Id:') !!}
    {!! Form::number('area_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidade Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade_id', 'Unidade Id:') !!}
    {!! Form::number('unidade_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areaUnidads.index') !!}" class="btn btn-default">Cancel</a>
</div>
