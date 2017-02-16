<table class="table table-responsive" id="documentosUnidads-table">
    <thead>
        <th>Unidade Id</th>
        <th>Tipo Documento</th>
        <th>Ubicacion</th>
        <th>Notas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($documentosUnidads as $documentosUnidad)
        <tr>
            <td>{!! $documentosUnidad->unidade_id !!}</td>
            <td>{!! $documentosUnidad->tipo_documento !!}</td>
            <td>{!! $documentosUnidad->ubicacion !!}</td>
            <td>{!! $documentosUnidad->notas !!}</td>
            <td>
                {!! Form::open(['route' => ['documentosUnidads.destroy', $documentosUnidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('documentosUnidads.show', [$documentosUnidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('documentosUnidads.edit', [$documentosUnidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>