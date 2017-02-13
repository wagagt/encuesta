<table class="table table-responsive" id="tipoRequisitos-table">
    <thead>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoRequisitos as $tipoRequisito)
        <tr>
            <td>{!! $tipoRequisito->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoRequisitos.destroy', $tipoRequisito->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoRequisitos.show', [$tipoRequisito->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoRequisitos.edit', [$tipoRequisito->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>