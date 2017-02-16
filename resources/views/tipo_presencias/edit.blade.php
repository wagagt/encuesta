@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Tipo Presencia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoPresencia, ['route' => ['tipoPresencias.update', $tipoPresencia->id], 'method' => 'patch']) !!}

                        @include('tipo_presencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection