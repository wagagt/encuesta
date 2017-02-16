@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Procedimiento
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($procedimiento, ['route' => ['procedimientos.update', $procedimiento->id], 'method' => 'patch']) !!}

                        @include('procedimientos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection