@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Paso
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($paso, ['route' => ['pasos.update', $paso->id], 'method' => 'patch']) !!}

                        @include('pasos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection