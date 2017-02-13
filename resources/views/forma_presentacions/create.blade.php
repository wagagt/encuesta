@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Forma Presentacion
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'formaPresentacions.store']) !!}

                        @include('forma_presentacions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
