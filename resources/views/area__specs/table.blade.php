<table class="table table-responsive" id="areaSpecs-table">
    <thead>
        <th>Area Id</th>
        <th>Nombre</th>
        <th>Evaluacion Criterio1</th>
        <th>Evaluacion Criterio2</th>
        <th>Foto Ubicacion</th>
        <th>Notas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($areaSpecs as $areaSpec)
        <tr>
            <td>{!! $areaSpec->area_id !!}</td>
            <td>{!! $areaSpec->nombre !!}</td>
            <td>{!! $areaSpec->evaluacion_criterio1 !!}</td>
            <td>{!! $areaSpec->evaluacion_criterio2 !!}</td>
            <td>{!! $areaSpec->foto_ubicacion !!}</td>
            <td>{!! $areaSpec->notas !!}</td>
            <td>
                {!! Form::open(['route' => ['areaSpecs.destroy', $areaSpec->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areaSpecs.show', [$areaSpec->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areaSpecs.edit', [$areaSpec->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>