<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'tabindex' => 1, 'required', 'autofocus']) !!}

</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">

    {!! Form::label('sitio_web', 'Sitio Web:') !!}
    {!! Form::text('sitio_web', null, ['class' => 'form-control', 'tabindex' => 2, 'required']) !!}

</div>


<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('direccion', 'Direccón:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'tabindex' => 3, 'required']) !!}

</div>

<div class="form-group col-xs-12 col-sm-12 col-sm-12">
    {!! Form::label('telefonos', 'Teléfonos:') !!}
    {!! Form::text('telefonos', null, ['class' => 'form-control', 'tabindex' => 4, 'required']) !!}

</div>

<hr/>

<div class="form-group col-md-12">

    {!! Form::label('cierre_medio_si', 'Si') !!}
    {!! Form::radio('cierre_medio', true) !!}
    {!! Form::label('cierre_medio_no', 'No') !!}
    {!! Form::radio('cierre_medio', false) !!}

</div>


<div class="form-group col-md-12">
    <table class="table table-responsive table-bordered" id="empresas-table">
        <thead>
        <th>DE</th>
        <th>A</th>

        </thead>
        <tbody>

            <tr>
                <td>{!! Form::date('medio_dia_cierra', null,['form-control']) !!}</td>
                <td>{!! Form::date('medio_dia_abre', null,['form-control']) !!} </td>

            </tr>

        </tbody>
    </table>

</div>




