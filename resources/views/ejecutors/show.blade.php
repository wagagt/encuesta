@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Ejecutor
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ejecutors.show_fields')
                    <a href="{!! route('ejecutors.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
