@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Requisitos Puesto
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($requisitosPuesto, ['route' => ['requisitosPuestos.update', $requisitosPuesto->id], 'method' => 'patch']) !!}

                        @include('requisitos_puestos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection