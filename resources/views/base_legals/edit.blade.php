@extends('layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Base Legal
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($baseLegal, ['route' => ['baseLegals.update', $baseLegal->id], 'method' => 'patch']) !!}

                        @include('base_legals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection