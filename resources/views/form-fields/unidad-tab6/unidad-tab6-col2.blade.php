<div class="form-group col-md-12">
    <table class="table table-responsive table-bordered" id="empresas-table">
        <thead>
        <th>Especificación</th>
        <th>Evaluación</th>
        <th>Notas</th>

        </thead>
        <tbody>

            <tr>
                <td>
                    <h5>Ventilación</h5>
                </td>
                <td>
                    {!! Form::label('satisfactorio', 'Satisfactorio') !!}
                    {!! Form::radio('eval_ventilacion', true) !!}&nbsp;&nbsp;&nbsp;&nbsp;
                    {!! Form::label('deficiente', 'Deficiente') !!}
                    {!! Form::radio('eval_ventilacion', false) !!}
                </td>
                <td>{!! Form::text('telefonos', null, ['class' => 'form-control', 'tabindex' => 3, 'required']) !!}</td>
            </tr>
            <tr>
                <td>
                    <h5>Iluminación</h5>
                </td>
                <td>
                    {!! Form::label('satisfactorio', 'Satisfactorio') !!}
                    {!! Form::radio('eval_iluminacion', true) !!}&nbsp;&nbsp;&nbsp;&nbsp;
                    {!! Form::label('deficiente', 'Deficiente') !!}
                    {!! Form::radio('eval_iluminacion', false) !!}
                </td>
                <td>{!! Form::text('telefonos', null, ['class' => 'form-control', 'tabindex' => 3, 'required']) !!}</td>
            </tr>
            <tr>
                <td>
                    <h5>Higiene</h5>
                </td>
                <td>
                    {!! Form::label('satisfactorio', 'Satisfactorio') !!}
                    {!! Form::radio('eval_higiene', true) !!}&nbsp;&nbsp;&nbsp;&nbsp;
                    {!! Form::label('deficiente', 'Deficiente') !!}
                    {!! Form::radio('eval_higiene', false) !!}
                </td>
                <td>{!! Form::text('telefonos', null, ['class' => 'form-control', 'tabindex' => 3, 'required']) !!}</td>
            </tr>
        </tbody>
    </table>

</div>




