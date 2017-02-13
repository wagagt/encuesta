<table class="table table-responsive" id="requisitos-table">
    <thead>
        <th>Paso Id</th>
        <th>Tipo Requisito Id</th>
        <th>Forma Presentacione Id</th>
        <th>Base Legal Costo Id</th>
        <th>Nombre</th>
        <th>Forma Presentacion</th>
        <th>Otra Forma Presentacion</th>
        <th>Otro Tipo Requisito</th>
        <th>Nombre Blc</th>
        <th>Numero Blc</th>
        <th>Articulo Blc</th>
        <th>Otro Blc</th>
        <th>Foto Blc Ubicacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($requisitos as $requisito)
        <tr>
            <td>{!! $requisito->paso_id !!}</td>
            <td>{!! $requisito->tipo_requisito_id !!}</td>
            <td>{!! $requisito->forma_presentacione_id !!}</td>
            <td>{!! $requisito->base_legal_costo_id !!}</td>
            <td>{!! $requisito->nombre !!}</td>
            <td>{!! $requisito->forma_presentacion !!}</td>
            <td>{!! $requisito->otra_forma_presentacion !!}</td>
            <td>{!! $requisito->otro_tipo_requisito !!}</td>
            <td>{!! $requisito->nombre_blc !!}</td>
            <td>{!! $requisito->numero_blc !!}</td>
            <td>{!! $requisito->articulo_blc !!}</td>
            <td>{!! $requisito->otro_blc !!}</td>
            <td>{!! $requisito->foto_blc_ubicacion !!}</td>
            <td>
                {!! Form::open(['route' => ['requisitos.destroy', $requisito->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('requisitos.show', [$requisito->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('requisitos.edit', [$requisito->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>