<!-- Nombre Base Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_base', 'Nombre Base:') !!}
    {!! Form::text('nombre_base', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Articulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('articulo', 'Articulo:') !!}
    {!! Form::text('articulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Notas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('notas', 'Notas:') !!}
    {!! Form::text('notas', null, ['class' => 'form-control']) !!}
</div>

<!-- Doc Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doc_ubicacion', 'Doc Ubicacion:') !!}
    {!! Form::text('doc_ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('baseLegals.index') !!}" class="btn btn-default">Cancel</a>
</div>
