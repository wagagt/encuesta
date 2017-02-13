<table class="table table-responsive" id="tipoResultados-table">
    <thead>
        <th>Tipo</th>
        <th>Especifique</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoResultados as $tipoResultado)
        <tr>
            <td>{!! $tipoResultado->tipo !!}</td>
            <td>{!! $tipoResultado->especifique !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoResultados.destroy', $tipoResultado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoResultados.show', [$tipoResultado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoResultados.edit', [$tipoResultado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>