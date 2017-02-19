<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('area_id', 'Base Legal:') !!}
    <select class="area_id form-control">
        <option value="WY">Decreto ministerial</option>
      <option value="AL">Ley</option>
      <option value="WY">Reglamento</option>
    </select>

</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('direccion', 'Otra especifique:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'tabindex' => 2, 'required']) !!}

</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('nombre:', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'tabindex' => 1, 'required', 'autofocus']) !!}

</div>



<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('telefonos', 'Número:') !!}
    {!! Form::text('telefonos', null, ['class' => 'form-control', 'tabindex' => 3, 'required']) !!}

</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('puestos_cantidad', 'Artículo:') !!}
    {!! Form::text('puestos_cantidad', null, ['class' => 'form-control', 'tabindex' => 4, 'required']) !!}

</div>
<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('personas_cantidad', 'Subir foto:') !!}
    {!! Form::text('personas_cantidad', null, ['class' => 'form-control', 'tabindex' => 4, 'required']) !!}

</div>

    <div class="form-group col-xs-12 col-sm-12 col-sm-12">
        <div class="pull-right">
            <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
        </div>
        <table class="table table-responsive table-bordered" id="empresas-table">
            <thead>
            <th>FOTOGRAFIA</th>
            <th>ACCION</th>
            </thead>
            <tbody>
            <tr>
                <td>Foto de la seccion</td>
                <td><a href="#" class="btn btn-info" style="font-size: 10px;"><i class="fa fa-camera"></i></a>
                    <a href="#" class="btn btn-info" style="font-size: 10px;"><i class="fa fa-trash"></i></a>
                </td>

            </tr>
            </tbody>
        </table>
    </div>




