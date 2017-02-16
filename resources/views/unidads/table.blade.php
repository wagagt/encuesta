<table class="table table-responsive" id="unidads-table">
    <thead>
        <th>Institucione Id</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefonos</th>
        <th>Personas Cantidad</th>
        <th>Puestos Cantidad</th>
        <th>Foto Ubicacion</th>
        <th>Foto Personas Ubicacion</th>
        <th>Notas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($unidads as $unidad)
        <tr>
            <td>{!! $unidad->institucione_id !!}</td>
            <td>{!! $unidad->nombre !!}</td>
            <td>{!! $unidad->direccion !!}</td>
            <td>{!! $unidad->telefonos !!}</td>
            <td>{!! $unidad->personas_cantidad !!}</td>
            <td>{!! $unidad->puestos_cantidad !!}</td>
            <td>{!! $unidad->foto_ubicacion !!}</td>
            <td>{!! $unidad->foto_personas_ubicacion !!}</td>
            <td>{!! $unidad->notas !!}</td>
            <td>
                {!! Form::open(['route' => ['unidads.destroy', $unidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('unidads.show', [$unidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('unidads.edit', [$unidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>