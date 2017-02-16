@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Horarios Unidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($horariosUnidad, ['route' => ['horariosUnidads.update', $horariosUnidad->id], 'method' => 'patch']) !!}

                        @include('horarios_unidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection