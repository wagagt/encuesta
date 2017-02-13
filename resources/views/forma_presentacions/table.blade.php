<table class="table table-responsive" id="formaPresentacions-table">
    <thead>
        <th>Forma</th>
        <th>Tipo Presentacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($formaPresentacions as $formaPresentacion)
        <tr>
            <td>{!! $formaPresentacion->forma !!}</td>
            <td>{!! $formaPresentacion->tipo_presentacion !!}</td>
            <td>
                {!! Form::open(['route' => ['formaPresentacions.destroy', $formaPresentacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('formaPresentacions.show', [$formaPresentacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('formaPresentacions.edit', [$formaPresentacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>