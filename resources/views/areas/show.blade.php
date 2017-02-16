@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Area
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('areas.show_fields')
                    <a href="{!! route('areas.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
