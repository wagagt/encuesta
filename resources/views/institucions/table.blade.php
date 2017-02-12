<table class="table table-responsive" id="institucions-table">
    <thead>
        <th>Nombre</th>
        <th>Sitio Web</th>
        <th>Direccion</th>
        <th>Telefonos</th>
        <th>Pregunta Final</th>
        <th>Estado Avance</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($institucions as $institucion)
        <tr>
            <td>{!! $institucion->nombre !!}</td>
            <td>{!! $institucion->sitio_web !!}</td>
            <td>{!! $institucion->direccion !!}</td>
            <td>{!! $institucion->telefonos !!}</td>
            <td>{!! $institucion->pregunta_final !!}</td>
            <td>{!! $institucion->estado_avance !!}</td>
            <td>
                {!! Form::open(['route' => ['institucions.destroy', $institucion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('institucions.show', [$institucion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('institucions.edit', [$institucion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>