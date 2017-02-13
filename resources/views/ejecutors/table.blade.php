<table class="table table-responsive" id="ejecutors-table">
    <thead>
        <th>Paso Id</th>
        <th>Nombre</th>
        <th>Puesto</th>
        <th>Recibe Del Paso</th>
        <th>Entrega Al Paso</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($ejecutors as $ejecutor)
        <tr>
            <td>{!! $ejecutor->paso_id !!}</td>
            <td>{!! $ejecutor->nombre !!}</td>
            <td>{!! $ejecutor->puesto !!}</td>
            <td>{!! $ejecutor->recibe_del_paso !!}</td>
            <td>{!! $ejecutor->entrega_al_paso !!}</td>
            <td>
                {!! Form::open(['route' => ['ejecutors.destroy', $ejecutor->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ejecutors.show', [$ejecutor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ejecutors.edit', [$ejecutor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>