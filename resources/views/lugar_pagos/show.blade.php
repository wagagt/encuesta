@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Lugar Pago
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('lugar_pagos.show_fields')
                    <a href="{!! route('lugarPagos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
