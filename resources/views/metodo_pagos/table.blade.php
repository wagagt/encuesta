<table class="table table-responsive" id="metodoPagos-table">
    <thead>
        <th>Paso Id</th>
        <th>Nombre</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($metodoPagos as $metodoPago)
        <tr>
            <td>{!! $metodoPago->paso_id !!}</td>
            <td>{!! $metodoPago->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['metodoPagos.destroy', $metodoPago->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('metodoPagos.show', [$metodoPago->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('metodoPagos.edit', [$metodoPago->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>