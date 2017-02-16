@extends('theme.layouts.base')
@section('title', 'Main')
@section('content')

@section('content')

<div class="">

        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Institución 1</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Datos Generales</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Unidades</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Contactos</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Documentos</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content col-md-12">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                    {!! Form::open() !!}
                                    <div class="col-md-6">

                                       <h2>Datos de la institución</h2>


                                        @include('form-fields.institucion-tab1.institucion-tab1-col1')

                                    </div>
                                    <div class="col-md-6">
                                        <h2>Horarios de atención</h2>

                                        @include('form-fields.institucion-tab1.institucion-tab1-col2')
                                    </div>
                                    <div class="col-md-12 text-right">
                                        {!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                    {!! Form::open() !!}
                                    <div class="col-md-6">

                                        <h2>Datos Generales de la Unidad</h2>


                                        @include('form-fields.institucion-tab2.institucion-tab2-col1')

                                    </div>
                                    <div class="col-md-6">

                                        @include('form-fields.institucion-tab2.institucion-tab2-col2')
                                    </div>
                                    <div class="col-md-12 text-right">
                                        {!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                    <h2>Unidades de la institución</h2>
                                    <div class="col-md-12 text-right">
                                        @include('form-fields.institucion-tab2.institucion-tab2-table')
                                    </div>

                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                        booth letterpress, commodo enim craft beer mlkshk </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                        booth letterpress, commodo enim craft beer mlkshk </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>

    </div>
</div>

@endsection

@section('js')
    <script>

    </script>


@endsection





