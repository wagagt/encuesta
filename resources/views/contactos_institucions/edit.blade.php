@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Contactos Institucion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contactosInstitucion, ['route' => ['contactosInstitucions.update', $contactosInstitucion->id], 'method' => 'patch']) !!}

                        @include('contactos_institucions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection