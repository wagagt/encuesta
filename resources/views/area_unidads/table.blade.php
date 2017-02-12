<table class="table table-responsive" id="areaUnidads-table">
    <thead>
        <th>Area Id</th>
        <th>Unidade Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($areaUnidads as $areaUnidad)
        <tr>
            <td>{!! $areaUnidad->area_id !!}</td>
            <td>{!! $areaUnidad->unidade_id !!}</td>
            <td>
                {!! Form::open(['route' => ['areaUnidads.destroy', $areaUnidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areaUnidads.show', [$areaUnidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areaUnidads.edit', [$areaUnidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>