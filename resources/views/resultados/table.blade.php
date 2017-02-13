<table class="table table-responsive" id="resultados-table">
    <thead>
        <th>Tipo Resultado Id</th>
        <th>Paso Id</th>
        <th>Nombre</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($resultados as $resultado)
        <tr>
            <td>{!! $resultado->tipo_resultado_id !!}</td>
            <td>{!! $resultado->paso_id !!}</td>
            <td>{!! $resultado->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['resultados.destroy', $resultado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('resultados.show', [$resultado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('resultados.edit', [$resultado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>