<table class="table table-responsive" id="horariosInstitucions-table">
    <thead>
        <th>Institucione Id</th>
        <th>Dia</th>
        <th>Entrada</th>
        <th>Salida</th>
        <th>Medio Dia Cierra</th>
        <th>Medio Dia Abre</th>
        <th>Notas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($horariosInstitucions as $horariosInstitucion)
        <tr>
            <td>{!! $horariosInstitucion->institucione_id !!}</td>
            <td>{!! $horariosInstitucion->dia !!}</td>
            <td>{!! $horariosInstitucion->entrada !!}</td>
            <td>{!! $horariosInstitucion->salida !!}</td>
            <td>{!! $horariosInstitucion->medio_dia_cierra !!}</td>
            <td>{!! $horariosInstitucion->medio_dia_abre !!}</td>
            <td>{!! $horariosInstitucion->notas !!}</td>
            <td>
                {!! Form::open(['route' => ['horariosInstitucions.destroy', $horariosInstitucion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('horariosInstitucions.show', [$horariosInstitucion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('horariosInstitucions.edit', [$horariosInstitucion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>