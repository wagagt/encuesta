<table class="table table-responsive" id="imagenResultados-table">
    <thead>
        <th>Resultado Id</th>
        <th>Descripcion</th>
        <th>Imagen Ubicacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($imagenResultados as $imagenResultado)
        <tr>
            <td>{!! $imagenResultado->resultado_id !!}</td>
            <td>{!! $imagenResultado->descripcion !!}</td>
            <td>{!! $imagenResultado->imagen_ubicacion !!}</td>
            <td>
                {!! Form::open(['route' => ['imagenResultados.destroy', $imagenResultado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('imagenResultados.show', [$imagenResultado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('imagenResultados.edit', [$imagenResultado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>