<!-- Institucione Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('institucione_id', 'Institucione Id:') !!}
    {!! Form::number('institucione_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_cargo', 'Titulo Cargo:') !!}
    {!! Form::text('titulo_cargo', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Directo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_directo', 'Telefono Directo:') !!}
    {!! Form::text('telefono_directo', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_ubicacion', 'Foto Ubicacion:') !!}
    {!! Form::text('foto_ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contactosInstitucions.index') !!}" class="btn btn-default">Cancel</a>
</div>
