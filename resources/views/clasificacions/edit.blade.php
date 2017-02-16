@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Clasificacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($clasificacion, ['route' => ['clasificacions.update', $clasificacion->id], 'method' => 'patch']) !!}

                        @include('clasificacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection