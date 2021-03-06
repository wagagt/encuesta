@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Tipo Requisito
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoRequisito, ['route' => ['tipoRequisitos.update', $tipoRequisito->id], 'method' => 'patch']) !!}

                        @include('tipo_requisitos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection