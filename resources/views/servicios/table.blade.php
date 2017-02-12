<table class="table table-responsive" id="servicios-table">
    <thead>
        <th>Unidade Id</th>
        <th>Bases Legale Id</th>
        <th>Otra Base Legal</th>
        <th>Clasificacione Id</th>
        <th>Otra Clasificacion</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Expone Muestra</th>
        <th>Cantidad Procedimientos</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($servicios as $servicio)
        <tr>
            <td>{!! $servicio->unidade_id !!}</td>
            <td>{!! $servicio->bases_legale_id !!}</td>
            <td>{!! $servicio->otra_base_legal !!}</td>
            <td>{!! $servicio->clasificacione_id !!}</td>
            <td>{!! $servicio->otra_clasificacion !!}</td>
            <td>{!! $servicio->nombre !!}</td>
            <td>{!! $servicio->descripcion !!}</td>
            <td>{!! $servicio->expone_muestra !!}</td>
            <td>{!! $servicio->cantidad_procedimientos !!}</td>
            <td>
                {!! Form::open(['route' => ['servicios.destroy', $servicio->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('servicios.show', [$servicio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('servicios.edit', [$servicio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>