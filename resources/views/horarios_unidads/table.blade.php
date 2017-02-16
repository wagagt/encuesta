<table class="table table-responsive" id="horariosUnidads-table">
    <thead>
        <th>Unidade Id</th>
        <th>Dia</th>
        <th>Entrada</th>
        <th>Salida</th>
        <th>Medio Dia Cierra</th>
        <th>Medio Dia Abre</th>
        <th>Notas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($horariosUnidads as $horariosUnidad)
        <tr>
            <td>{!! $horariosUnidad->unidade_id !!}</td>
            <td>{!! $horariosUnidad->dia !!}</td>
            <td>{!! $horariosUnidad->entrada !!}</td>
            <td>{!! $horariosUnidad->salida !!}</td>
            <td>{!! $horariosUnidad->medio_dia_cierra !!}</td>
            <td>{!! $horariosUnidad->medio_dia_abre !!}</td>
            <td>{!! $horariosUnidad->notas !!}</td>
            <td>
                {!! Form::open(['route' => ['horariosUnidads.destroy', $horariosUnidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('horariosUnidads.show', [$horariosUnidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('horariosUnidads.edit', [$horariosUnidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>