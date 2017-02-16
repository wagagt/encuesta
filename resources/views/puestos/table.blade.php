<table class="table table-responsive" id="puestos-table">
    <thead>
        <th>Unidade Id</th>
        <th>Nombre</th>
        <th>Cantidad Personas</th>
        <th>Jefe Inmediato</th>
        <th>Reporta A</th>
        <th>Objetivo</th>
        <th>Supervisa A</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($puestos as $puesto)
        <tr>
            <td>{!! $puesto->unidade_id !!}</td>
            <td>{!! $puesto->nombre !!}</td>
            <td>{!! $puesto->cantidad_personas !!}</td>
            <td>{!! $puesto->jefe_inmediato !!}</td>
            <td>{!! $puesto->reporta_a !!}</td>
            <td>{!! $puesto->objetivo !!}</td>
            <td>{!! $puesto->supervisa_a !!}</td>
            <td>
                {!! Form::open(['route' => ['puestos.destroy', $puesto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('puestos.show', [$puesto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('puestos.edit', [$puesto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>