<table class="table table-responsive" id="clasificacions-table">
    <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($clasificacions as $clasificacion)
        <tr>
            <td>{!! $clasificacion->nombre !!}</td>
            <td>{!! $clasificacion->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['clasificacions.destroy', $clasificacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clasificacions.show', [$clasificacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clasificacions.edit', [$clasificacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>