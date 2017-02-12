@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Documentos Unidad
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('documentos_unidads.show_fields')
                    <a href="{!! route('documentosUnidads.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
