<table class="table table-responsive" id="requisitosPuestos-table">
    <thead>
        <th>Requerido</th>
        <th>Tipo</th>
        <th>Enunciado</th>
        <th>Rango Respuestas</th>
        <th>Respuesta</th>
        <th>Notas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($requisitosPuestos as $requisitosPuesto)
        <tr>
            <td>{!! $requisitosPuesto->requerido !!}</td>
            <td>{!! $requisitosPuesto->tipo !!}</td>
            <td>{!! $requisitosPuesto->enunciado !!}</td>
            <td>{!! $requisitosPuesto->rango_respuestas !!}</td>
            <td>{!! $requisitosPuesto->respuesta !!}</td>
            <td>{!! $requisitosPuesto->notas !!}</td>
            <td>
                {!! Form::open(['route' => ['requisitosPuestos.destroy', $requisitosPuesto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('requisitosPuestos.show', [$requisitosPuesto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('requisitosPuestos.edit', [$requisitosPuesto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>