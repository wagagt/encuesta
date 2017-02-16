@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Horarios Institucion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($horariosInstitucion, ['route' => ['horariosInstitucions.update', $horariosInstitucion->id], 'method' => 'patch']) !!}

                        @include('horarios_institucions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection