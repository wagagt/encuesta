@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Lugar Pago
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'lugarPagos.store']) !!}

                        @include('lugar_pagos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
