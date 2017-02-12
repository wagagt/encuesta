<table class="table table-responsive" id="documentosInstitucions-table">
    <thead>
        <th>Institucione Id</th>
        <th>Tipo Documento</th>
        <th>Ubicacion</th>
        <th>Notas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($documentosInstitucions as $documentosInstitucion)
        <tr>
            <td>{!! $documentosInstitucion->institucione_id !!}</td>
            <td>{!! $documentosInstitucion->tipo_documento !!}</td>
            <td>{!! $documentosInstitucion->ubicacion !!}</td>
            <td>{!! $documentosInstitucion->notas !!}</td>
            <td>
                {!! Form::open(['route' => ['documentosInstitucions.destroy', $documentosInstitucion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('documentosInstitucions.show', [$documentosInstitucion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('documentosInstitucions.edit', [$documentosInstitucion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>