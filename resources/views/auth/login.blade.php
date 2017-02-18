@extends('theme.layouts.baseLogin')
@section('title', 'Login')
@section('content')

{!! Form::open(['route'=> '/login', 'method' => 'post'])!!}

        
        <h1>Ingresar</h1>
    <div class="form-group has-feedback">

        {!! Form::text('user', null,['class'=>'form-control', 'placeholder' => 'Usuario', 'autofocus'])!!}
        <span class="fa fa-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña'])!!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
        <div>
            <div class="col-xs-6">
                {!! Form::submit('Ingresar',['class' => 'btn btn-default submit'])!!}
            </div>
            <div class="col-xs-6">
                <a class="reset_pass" href="#">¿ha olvidado su contraseña?</a>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="separator">

            <div class="clearfix"></div>
            <br />

            <div>
                <h1><i class="fa fa-cubes" aria-hidden="true"></i> Stock-taking System</h1>
                <p>{{date('Y')}} All Rights Reserved. MapleLink</p>
            </div>
        </div>
     {!! Form::close() !!}
@endsection
