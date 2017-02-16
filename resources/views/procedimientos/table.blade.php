<table class="table table-responsive" id="procedimientos-table">
    <thead>
        <th>Servicio Id</th>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($procedimientos as $procedimiento)
        <tr>
            <td>{!! $procedimiento->servicio_id !!}</td>
            <td>{!! $procedimiento->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['procedimientos.destroy', $procedimiento->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('procedimientos.show', [$procedimiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('procedimientos.edit', [$procedimiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>