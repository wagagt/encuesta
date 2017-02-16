<table class="table table-responsive" id="fotoResultados-table">
    <thead>
        <th>Resultado Id</th>
        <th>Descripcion</th>
        <th>Especifique</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($fotoResultados as $fotoResultado)
        <tr>
            <td>{!! $fotoResultado->resultado_id !!}</td>
            <td>{!! $fotoResultado->descripcion !!}</td>
            <td>{!! $fotoResultado->especifique !!}</td>
            <td>
                {!! Form::open(['route' => ['fotoResultados.destroy', $fotoResultado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('fotoResultados.show', [$fotoResultado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('fotoResultados.edit', [$fotoResultado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>