<table class="table table-responsive" id="pasos-table">
    <thead>
        <th>Nombre</th>
        <th>Procedimiento Id</th>
        <th>Base Legal Costos Id</th>
        <th>Tipos Presencia Id</th>
        <th>Tipo Paso Id</th>
        <th>Costo</th>
        <th>Existe Costo</th>
        <th>Pago Interno</th>
        <th>Es Agencia Banco</th>
        <th>No Agencia Especifique</th>
        <th>Base Legal Costo</th>
        <th>Nombre Blc</th>
        <th>Numero Blc</th>
        <th>Articulo Blc</th>
        <th>Otro Blc</th>
        <th>Requiere Presencia</th>
        <th>Foto Blc Ubicacion</th>
        <th>Tipo Resultado Especifique</th>
        <th>Otro Tipo Paso</th>
        <th>Otro Metodo Pago</th>
        <th>Otro Tipo Resultado</th>
        <th>Otro Lugar Pago</th>
        <th>Otro Base Legal Costo</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pasos as $paso)
        <tr>
            <td>{!! $paso->nombre !!}</td>
            <td>{!! $paso->procedimiento_id !!}</td>
            <td>{!! $paso->base_legal_costos_id !!}</td>
            <td>{!! $paso->tipos_presencia_id !!}</td>
            <td>{!! $paso->tipo_paso_id !!}</td>
            <td>{!! $paso->costo !!}</td>
            <td>{!! $paso->existe_costo !!}</td>
            <td>{!! $paso->pago_interno !!}</td>
            <td>{!! $paso->es_agencia_banco !!}</td>
            <td>{!! $paso->no_agencia_especifique !!}</td>
            <td>{!! $paso->base_legal_costo !!}</td>
            <td>{!! $paso->nombre_blc !!}</td>
            <td>{!! $paso->numero_blc !!}</td>
            <td>{!! $paso->articulo_blc !!}</td>
            <td>{!! $paso->otro_blc !!}</td>
            <td>{!! $paso->requiere_presencia !!}</td>
            <td>{!! $paso->foto_blc_ubicacion !!}</td>
            <td>{!! $paso->tipo_resultado_especifique !!}</td>
            <td>{!! $paso->otro_tipo_paso !!}</td>
            <td>{!! $paso->otro_metodo_pago !!}</td>
            <td>{!! $paso->otro_tipo_resultado !!}</td>
            <td>{!! $paso->otro_lugar_pago !!}</td>
            <td>{!! $paso->otro_base_legal_costo !!}</td>
            <td>
                {!! Form::open(['route' => ['pasos.destroy', $paso->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pasos.show', [$paso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pasos.edit', [$paso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>