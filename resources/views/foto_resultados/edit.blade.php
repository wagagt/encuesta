@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Foto Resultado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fotoResultado, ['route' => ['fotoResultados.update', $fotoResultado->id], 'method' => 'patch']) !!}

                        @include('foto_resultados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection