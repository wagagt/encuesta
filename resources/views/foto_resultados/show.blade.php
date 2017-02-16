@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Foto Resultado
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('foto_resultados.show_fields')
                    <a href="{!! route('fotoResultados.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
