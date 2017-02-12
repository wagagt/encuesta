<table class="table table-responsive" id="lugarPagos-table">
    <thead>
        <th>Paso Id</th>
        <th>Nombre</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($lugarPagos as $lugarPago)
        <tr>
            <td>{!! $lugarPago->paso_id !!}</td>
            <td>{!! $lugarPago->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['lugarPagos.destroy', $lugarPago->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('lugarPagos.show', [$lugarPago->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('lugarPagos.edit', [$lugarPago->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>