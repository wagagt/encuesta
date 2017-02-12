<table class="table table-responsive" id="baseLegalCostos-table">
    <thead>
        <th>Nombre</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($baseLegalCostos as $baseLegalCosto)
        <tr>
            <td>{!! $baseLegalCosto->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['baseLegalCostos.destroy', $baseLegalCosto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('baseLegalCostos.show', [$baseLegalCosto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('baseLegalCostos.edit', [$baseLegalCosto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>