@extends('theme.layouts.base')
@section('title', 'Main')
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
                                <li role="presentation" class="active"><a href="#tab_content1" id="profile-tab1" role="tab" data-toggle="tab" aria-expanded="true">Elegir Unidad</a></li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Datos Generales</a></li>
                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Contactos</a></li>
                                <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Documentos</a></li>
                                <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab5"data-toggle="tab" aria-expanded="false">Horarios</a></li>
                                <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab6" data-toggle="tab" aria-expanded="false">Instalaciones</a></li>
                                <li role="presentation" class=""><a href="#tab_content7" role="tab" id="profile-tab7" data-toggle="tab" aria-expanded="false">Puestos</a></li>
                                <li role="presentation" class=""><a href="#tab_content8" role="tab" id="profile-tab8" data-toggle="tab" aria-expanded="false">Servicios</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content col-md-12">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                    {!! Form::open() !!}
                                    <div class="col-md-6">
                                       <h2>Datos de la institución</h2>
                                        @include('form-fields.unidad-tab1.unidad-tab1-col1')
                                    </div>
                                    <div class="col-md-6">
                                        @include('form-fields.unidad-tab1.unidad-tab1-col2')
                                    </div>
                                    <div class="col-md-12 text-right">
                                        {!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                    <div class="col-md-12 text-right">
                                        @include('form-fields.unidad-tab1.unidad-tab1-table')
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                    {!! Form::open() !!}
                                    <div class="col-md-6">
                                        <h2>Datos Generales de la Unidad</h2>
                                        @include('form-fields.unidad-tab2.unidad-tab2-col1')
                                    </div>
                                    <div class="col-md-6">
                                        @include('form-fields.unidad-tab2.unidad-tab2-col2')
                                    </div>
                                    <div class="col-md-12 text-right">
                                        {!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                    <div class="col-md-12 text-right">
                                        @include('form-fields.unidad-tab2.unidad-tab2-table')
                                    </div>
                                    <!--<h2>Unidades de la institución</h2>-->
                                    <!--<div class="col-md-12 text-right">-->
                                    <!--    @include('form-fields.institucion-tab2.institucion-tab2-table')-->
                                    <!--</div>-->
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                    {!! Form::open() !!}
                                    <div class="col-md-6">
                                        <h2>Contactos / Encargados:</h2>
                                        @include('form-fields.unidad-tab3.unidad-tab3-col1')
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Subir fotografía:</h2>
                                        @include('form-fields.unidad-tab3.unidad-tab3-col2')
                                    </div>
                                    <div class="col-md-12 text-right">
                                        {!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
                                    </div>
                                    <div class="col-md-12 text-right">
                                        @include('form-fields.unidad-tab3.unidad-tab3-table')
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                                
                                <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                                     {!! Form::open(['route'=> 'file.store', 'method' => 'POST', 'files'=>'true','id' => 'myDropzone' , 'class' => 'dropzone', 'enctype' => 'multipart/form-data']) !!}
                                    <div class="col-md-6">
                                        <h2>Datos del Documento cache:</h2>
                                        @include('form-fields.unidad-tab4.unidad-tab4-col1')
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Notas:</h2>
                                        @include('form-fields.unidad-tab4.unidad-tab4-col2')
                                    </div>
                                    <div class="col-md-12 text-right">
                                        
                                        <button type="submit" class="btn btn-success" id="submit"><i class="fa fa-cloud-upload" ></i> Subir</button>
                                    </div>
                                    {!! Form::close() !!}
                                    <h2>Documentos de la unidad:</h2>
                                    <div class="col-md-12 text-right">
                                        @include('form-fields.unidad-tab4.unidad-tab4-table')
                                    </div>
                                </div>
                                
                              <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
                                    {!! Form::open() !!}
                                    <div class="col-md-6">
                                        <h2>Horarios de atencion:</h2>
                                        @include('form-fields.unidad-tab5.unidad-tab5-col1')
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Cierre al medio dia:</h2>
                                        @include('form-fields.unidad-tab5.unidad-tab5-col2')
                                    </div>
                                    <div class="col-md-12 text-right">
                                        
                                        <button type="submit" class="btn btn-success" id="submit"><i class="fa fa-cloud-upload" ></i> Subir</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                                
                             <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
                                    {!! Form::open() !!}
                                    <div class="col-md-6">
                                        <h2>Datos del Documento:</h2>
                                        @include('form-fields.unidad-tab6.unidad-tab6-col1')
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Notas:</h2>
                                        @include('form-fields.unidad-tab6.unidad-tab6-col2')
                                    </div>
                                    <div class="col-md-12 text-right">
                                        
                                        <button type="submit" class="btn btn-success" id="submit"><i class="fa fa-cloud-upload" ></i> Subir</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                                
                                <div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="profile-tab">
                                    {!! Form::open() !!}
                                    <div class="col-md-6">
                                        <h2>Datos del Documento:</h2>
                                        @include('form-fields.unidad-tab7.unidad-tab7-col1')
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Notas:</h2>
                                        @include('form-fields.unidad-tab7.unidad-tab7-col2')
                                    </div>
                                    <div class="col-md-12 text-right">
                                        
                                        <button type="submit" class="btn btn-success" id="submit"><i class="fa fa-cloud-upload" ></i> Subir</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                                
                                 <div role="tabpanel" class="tab-pane fade" id="tab_content8" aria-labelledby="profile-tab">
                                    {!! Form::open() !!}
                                    <div class="col-md-6">
                                        <h2>Datos del Documento:</h2>
                                        @include('form-fields.unidad-tab8.unidad-tab8-col1')
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Notas:</h2>
                                        @include('form-fields.unidad-tab8.unidad-tab8-col2')
                                    </div>
                                    <div class="col-md-12 text-right">
                                        
                                        <button type="submit" class="btn btn-success" id="submit"><i class="fa fa-cloud-upload" ></i> Subir</button>
                                    </div>
                                    {!! Form::close() !!}
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
        
        $(document).ready(function() {
  $(".institucion_id").select2();
});
        
Dropzone.options.myDropzone = {
            uploadMultiple: true,
            maxFilezise: 5120,
            maxFiles: 1,
            autoProcessQueue: false,
            parallelUploads: 5,
            previewsContainer: '#dropzonePreview',
            addRemoveLinks: true,
            dictRemoveFile: 'Remover selección',
            acceptedFiles: '.jpg, .jpeg, .png, .gif, .bmp, .docx, .doc, .xlsx, .xls, .pptx, .ppt, .pdf, .txt',
            thumbnailWidth:       150,
            thumbnailHeight:      150,



            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;

                submitBtn.addEventListener('click', function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on('addfile', function(file) {
                    //alert("Archivo subido");
                });destino

                this.on('complete', function(file) {
                    myDropzone.removeFile(file);
                });

                this.on('success', function(){
                    myDropzone.processQueue.bind(myDropzone);
                    if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                        location.reload();
                    }

                });
            }
        };
    </script>

@endsection





