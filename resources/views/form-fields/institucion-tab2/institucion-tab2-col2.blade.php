<div class="form-group col-md-12">
    <div class="form-group col-xs-12 col-sm-12 col-sm-12">
        {!! Form::label('comentarios', 'Comentarios:') !!}
        {!! Form::textarea('comentarios', null, ['class' => 'form-control', 'tabindex' => 4, 'required']) !!}

    </div>

</div>

<div class="form-group col-md-12">
    <div class="form-group col-xs-12 col-sm-12 col-sm-12">
        <table class="table table-responsive table-bordered" id="empresas-table">
            <thead>
            <th>DOCUMENTO</th>
            <th>ACCION</th>

            </thead>
            <tbody>

            <tr>

                <td>Foto de la unidad</td>
                <td><a href="#" class="btn btn-info" style="font-size: 10px;"><i class="fa fa-camera"></i></a>
                    <a href="#" class="btn btn-info" style="font-size: 10px;"><i class="fa fa-trash"></i></a>
                </td>

            </tr>
            <tr>

                <td>Foto de la unidad</td>
                <td><a href="#" class="btn btn-info" style="font-size: 10px;"><i class="fa fa-camera"></i></a>
                    <a href="#" class="btn btn-info" style="font-size: 10px;"><i class="fa fa-trash"></i></a>
                </td>

            </tr>

            </tbody>
        </table>
    </div>

</div>
