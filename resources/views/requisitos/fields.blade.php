<!-- Paso Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paso_id', 'Paso Id:') !!}
    {!! Form::number('paso_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Requisito Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_requisito_id', 'Tipo Requisito Id:') !!}
    {!! Form::number('tipo_requisito_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Forma Presentacione Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('forma_presentacione_id', 'Forma Presentacione Id:') !!}
    {!! Form::number('forma_presentacione_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Base Legal Costo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('base_legal_costo_id', 'Base Legal Costo Id:') !!}
    {!! Form::number('base_legal_costo_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Forma Presentacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('forma_presentacion', 'Forma Presentacion:') !!}
    {!! Form::text('forma_presentacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Otra Forma Presentacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otra_forma_presentacion', 'Otra Forma Presentacion:') !!}
    {!! Form::text('otra_forma_presentacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Otro Tipo Requisito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otro_tipo_requisito', 'Otro Tipo Requisito:') !!}
    {!! Form::text('otro_tipo_requisito', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Blc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_blc', 'Nombre Blc:') !!}
    {!! Form::text('nombre_blc', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Blc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_blc', 'Numero Blc:') !!}
    {!! Form::text('numero_blc', null, ['class' => 'form-control']) !!}
</div>

<!-- Articulo Blc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('articulo_blc', 'Articulo Blc:') !!}
    {!! Form::text('articulo_blc', null, ['class' => 'form-control']) !!}
</div>

<!-- Otro Blc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otro_blc', 'Otro Blc:') !!}
    {!! Form::text('otro_blc', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Blc Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_blc_ubicacion', 'Foto Blc Ubicacion:') !!}
    {!! Form::text('foto_blc_ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('requisitos.index') !!}" class="btn btn-default">Cancel</a>
</div>
