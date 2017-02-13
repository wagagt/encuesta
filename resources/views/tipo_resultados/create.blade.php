@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Tipo Resultado
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tipoResultados.store']) !!}

                        @include('tipo_resultados.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
