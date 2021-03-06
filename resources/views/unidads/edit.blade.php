@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Unidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($unidad, ['route' => ['unidads.update', $unidad->id], 'method' => 'patch']) !!}

                        @include('unidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection