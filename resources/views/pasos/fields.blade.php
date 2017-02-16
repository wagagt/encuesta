<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Procedimiento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedimiento_id', 'Procedimiento Id:') !!}
    {!! Form::number('procedimiento_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Base Legal Costos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('base_legal_costos_id', 'Base Legal Costos Id:') !!}
    {!! Form::number('base_legal_costos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipos Presencia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipos_presencia_id', 'Tipos Presencia Id:') !!}
    {!! Form::number('tipos_presencia_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Paso Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_paso_id', 'Tipo Paso Id:') !!}
    {!! Form::number('tipo_paso_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Costo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costo', 'Costo:') !!}
    {!! Form::number('costo', null, ['class' => 'form-control']) !!}
</div>

<!-- Existe Costo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('existe_costo', 'Existe Costo:') !!}
    {!! Form::text('existe_costo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pago Interno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pago_interno', 'Pago Interno:') !!}
    {!! Form::text('pago_interno', null, ['class' => 'form-control']) !!}
</div>

<!-- Es Agencia Banco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('es_agencia_banco', 'Es Agencia Banco:') !!}
    {!! Form::text('es_agencia_banco', null, ['class' => 'form-control']) !!}
</div>

<!-- No Agencia Especifique Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_agencia_especifique', 'No Agencia Especifique:') !!}
    {!! Form::text('no_agencia_especifique', null, ['class' => 'form-control']) !!}
</div>

<!-- Base Legal Costo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('base_legal_costo', 'Base Legal Costo:') !!}
    {!! Form::text('base_legal_costo', null, ['class' => 'form-control']) !!}
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

<!-- Requiere Presencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('requiere_presencia', 'Requiere Presencia:') !!}
    {!! Form::text('requiere_presencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Blc Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_blc_ubicacion', 'Foto Blc Ubicacion:') !!}
    {!! Form::text('foto_blc_ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Resultado Especifique Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_resultado_especifique', 'Tipo Resultado Especifique:') !!}
    {!! Form::text('tipo_resultado_especifique', null, ['class' => 'form-control']) !!}
</div>

<!-- Otro Tipo Paso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otro_tipo_paso', 'Otro Tipo Paso:') !!}
    {!! Form::text('otro_tipo_paso', null, ['class' => 'form-control']) !!}
</div>

<!-- Otro Metodo Pago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otro_metodo_pago', 'Otro Metodo Pago:') !!}
    {!! Form::text('otro_metodo_pago', null, ['class' => 'form-control']) !!}
</div>

<!-- Otro Tipo Resultado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otro_tipo_resultado', 'Otro Tipo Resultado:') !!}
    {!! Form::text('otro_tipo_resultado', null, ['class' => 'form-control']) !!}
</div>

<!-- Otro Lugar Pago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otro_lugar_pago', 'Otro Lugar Pago:') !!}
    {!! Form::text('otro_lugar_pago', null, ['class' => 'form-control']) !!}
</div>

<!-- Otro Base Legal Costo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otro_base_legal_costo', 'Otro Base Legal Costo:') !!}
    {!! Form::text('otro_base_legal_costo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pasos.index') !!}" class="btn btn-default">Cancel</a>
</div>
