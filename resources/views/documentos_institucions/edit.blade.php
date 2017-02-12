@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Documentos Institucion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($documentosInstitucion, ['route' => ['documentosInstitucions.update', $documentosInstitucion->id], 'method' => 'patch']) !!}

                        @include('documentos_institucions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection