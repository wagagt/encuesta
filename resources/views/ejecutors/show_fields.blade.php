<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $ejecutor->id !!}</p>
</div>

<!-- Paso Id Field -->
<div class="form-group">
    {!! Form::label('paso_id', 'Paso Id:') !!}
    <p>{!! $ejecutor->paso_id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $ejecutor->nombre !!}</p>
</div>

<!-- Puesto Field -->
<div class="form-group">
    {!! Form::label('puesto', 'Puesto:') !!}
    <p>{!! $ejecutor->puesto !!}</p>
</div>

<!-- Recibe Del Paso Field -->
<div class="form-group">
    {!! Form::label('recibe_del_paso', 'Recibe Del Paso:') !!}
    <p>{!! $ejecutor->recibe_del_paso !!}</p>
</div>

<!-- Entrega Al Paso Field -->
<div class="form-group">
    {!! Form::label('entrega_al_paso', 'Entrega Al Paso:') !!}
    <p>{!! $ejecutor->entrega_al_paso !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $ejecutor->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $ejecutor->updated_at !!}</p>
</div>

