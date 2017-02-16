@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Documentos Unidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($documentosUnidad, ['route' => ['documentosUnidads.update', $documentosUnidad->id], 'method' => 'patch']) !!}

                        @include('documentos_unidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection