<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $procedimiento->id !!}</p>
</div>

<!-- Servicio Id Field -->
<div class="form-group">
    {!! Form::label('servicio_id', 'Servicio Id:') !!}
    <p>{!! $procedimiento->servicio_id !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $procedimiento->descripcion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $procedimiento->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $procedimiento->updated_at !!}</p>
</div>

