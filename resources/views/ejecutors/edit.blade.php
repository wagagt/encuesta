@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Ejecutor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ejecutor, ['route' => ['ejecutors.update', $ejecutor->id], 'method' => 'patch']) !!}

                        @include('ejecutors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection