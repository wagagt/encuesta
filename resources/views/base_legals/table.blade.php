<table class="table table-responsive" id="baseLegals-table">
    <thead>
        <th>Nombre Base</th>
        <th>Nombre</th>
        <th>Numero</th>
        <th>Articulo</th>
        <th>Notas</th>
        <th>Doc Ubicacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($baseLegals as $baseLegal)
        <tr>
            <td>{!! $baseLegal->nombre_base !!}</td>
            <td>{!! $baseLegal->nombre !!}</td>
            <td>{!! $baseLegal->numero !!}</td>
            <td>{!! $baseLegal->articulo !!}</td>
            <td>{!! $baseLegal->notas !!}</td>
            <td>{!! $baseLegal->doc_ubicacion !!}</td>
            <td>
                {!! Form::open(['route' => ['baseLegals.destroy', $baseLegal->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('baseLegals.show', [$baseLegal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('baseLegals.edit', [$baseLegal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>