@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Procedimiento
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('procedimientos.show_fields')
                    <a href="{!! route('procedimientos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
