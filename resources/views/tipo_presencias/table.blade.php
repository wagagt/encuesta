<table class="table table-responsive" id="tipoPresencias-table">
    <thead>
        <th>Paso Id</th>
        <th>Descripcion</th>
        <th>Tipo</th>
        <th>Minimo</th>
        <th>Maximo</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoPresencias as $tipoPresencia)
        <tr>
            <td>{!! $tipoPresencia->paso_id !!}</td>
            <td>{!! $tipoPresencia->descripcion !!}</td>
            <td>{!! $tipoPresencia->tipo !!}</td>
            <td>{!! $tipoPresencia->minimo !!}</td>
            <td>{!! $tipoPresencia->maximo !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoPresencias.destroy', $tipoPresencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoPresencias.show', [$tipoPresencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoPresencias.edit', [$tipoPresencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>