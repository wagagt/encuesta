<table class="table table-responsive" id="contactosInstitucions-table">
    <thead>
        <th>Institucione Id</th>
        <th>Nombre</th>
        <th>Titulo Cargo</th>
        <th>Email</th>
        <th>Telefono Directo</th>
        <th>Foto Ubicacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($contactosInstitucions as $contactosInstitucion)
        <tr>
            <td>{!! $contactosInstitucion->institucione_id !!}</td>
            <td>{!! $contactosInstitucion->nombre !!}</td>
            <td>{!! $contactosInstitucion->titulo_cargo !!}</td>
            <td>{!! $contactosInstitucion->email !!}</td>
            <td>{!! $contactosInstitucion->telefono_directo !!}</td>
            <td>{!! $contactosInstitucion->foto_ubicacion !!}</td>
            <td>
                {!! Form::open(['route' => ['contactosInstitucions.destroy', $contactosInstitucion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contactosInstitucions.show', [$contactosInstitucion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contactosInstitucions.edit', [$contactosInstitucion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>