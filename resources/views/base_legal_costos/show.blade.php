@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Base Legal Costo
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('base_legal_costos.show_fields')
                    <a href="{!! route('baseLegalCostos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
