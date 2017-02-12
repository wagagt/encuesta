@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Servicio
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($servicio, ['route' => ['servicios.update', $servicio->id], 'method' => 'patch']) !!}

                        @include('servicios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection