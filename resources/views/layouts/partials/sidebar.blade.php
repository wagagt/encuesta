<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <!--<li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>-->

            <li class="{{ Request::is('institucions*') ? 'active' : '' }}">
                <a href="{!! route('institucions.index') !!}"><i class="fa fa-edit"></i><span>Instituciones</span></a>
            </li>
                <li class="{{ Request::is('unidads*') ? 'active' : '' }}">
                <a href="{!! route('unidads.index') !!}"><i class="fa fa-edit"></i><span>Unidades</span></a>
            </li>
            
            <li class="treeview">
                <a href="#"><i class='fa fa-area-chart'></i> <span>Areas y Especificaciones</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    
                    <li class="{{ Request::is('areas*') ? 'active' : '' }}">
                        <a href="{!! route('areas.index') !!}"><span>Areas</span></a>
                    </li>
                    <li class="{{ Request::is('areaSpecs*') ? 'active' : '' }}">
                        <a href="{!! route('areaSpecs.index') !!}"><span>Especificaciones</span></a>
                    </li>
                    
                </ul>
            </li>
            
            
            <li class="{{ Request::is('procedimientos*') ? 'active' : '' }}">
                        <a href="{!! route('procedimientos.index') !!}"><i class="fa fa-edit"></i><span>Procedimientos</span></a>
                    </li>
            <li class="{{ Request::is('pasos*') ? 'active' : '' }}">
                <a href="{!! route('pasos.index') !!}"><i class="fa fa-edit"></i><span>Pasos</span></a>
            </li>   
            
            <li class="treeview">
                <a href="#"><i class='fa fa-area-chart'></i> <span>Servicios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    
                    <li class="{{ Request::is('servicios*') ? 'active' : '' }}">
                        <a href="{!! route('servicios.index') !!}"></i><span>Servicios</span></a>
                    </li>
                     <li class="{{ Request::is('clasificacions*') ? 'active' : '' }}">
                        <a href="{!! route('clasificacions.index') !!}"></i><span>Clasificacion</span></a>
                    </li>
                    <li class="{{ Request::is('baseLegals*') ? 'active' : '' }}">
                        <a href="{!! route('baseLegals.index') !!}"></i><span>BaseLegal</span></a>
                    </li>
                </ul>
            </li>
            
            <li class="treeview">
                <a href="#"><i class='fa fa-area-chart'></i> <span>Puestos y Requisitos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('puestos*') ? 'active' : '' }}">
                        <a href="{!! route('puestos.index') !!}"></i><span>Puestos</span></a>
                    </li>
                    <li class="{{ Request::is('tipoRequisitos*') ? 'active' : '' }}">
                        <a href="{!! route('tipoRequisitos.index') !!}"></i><span>Tipo Requisitos</span></a>
                    </li>
                </ul>
            </li>
              <li class="treeview">
                <a href="#"><i class='fa fa-area-chart'></i> <span>Resultados</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('resultados*') ? 'active' : '' }}">
                        <a href="{!! route('resultados.index') !!}"></i><span>Resultados</span></a>
                    </li>
                    <li class="{{ Request::is('tipoResultados*') ? 'active' : '' }}">
                        <a href="{!! route('tipoResultados.index') !!}"></i><span>Tipo de Resultados</span></a>
                    </li>
                </ul>
            </li>
                    
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Catálogos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    
                    <li class="{{ Request::is('documentosInstitucions*') ? 'active' : '' }}">
                        <a href="{!! route('documentosInstitucions.index') !!}"></i><span> Inst-Documentos</span></a>
                    </li>
                    <li class="{{ Request::is('contactosInstitucions*') ? 'active' : '' }}">
                        <a href="{!! route('contactosInstitucions.index') !!}"></i><span> Inst-Contactos</span></a>
                    </li>
                    <li class="{{ Request::is('horariosInstitucions*') ? 'active' : '' }}">
                        <a href="{!! route('horariosInstitucions.index') !!}"></i><span> Inst-Horarios</span></a>
                    </li>
                
                    <li class="{{ Request::is('documentosUnidads*') ? 'active' : '' }}">
                        <a href="{!! route('documentosUnidads.index') !!}"></i><span> Unidad-Documentos</span></a>
                    </li>
                    
                    <li class="{{ Request::is('areaUnidads*') ? 'active' : '' }}">
                        <a href="{!! route('areaUnidads.index') !!}"></i><span> Area x Unidades</span></a>
                    </li>
                    <li class="{{ Request::is('requisitosPuestos*') ? 'active' : '' }}">
                        <a href="{!! route('requisitosPuestos.index') !!}"></i><span>Puestos-Requisitos</span></a>
                    </li>
                  
                    
                    <li class="{{ Request::is('tipoPresencias*') ? 'active' : '' }}">
                        <a href="{!! route('tipoPresencias.index') !!}"></i><span> Tipo Presencias</span></a>
                    </li>
                    <li class="{{ Request::is('baseLegalCostos*') ? 'active' : '' }}">
                        <a href="{!! route('baseLegalCostos.index') !!}"></i><span> Base Legal Costos</span></a>
                    </li>
                    <li class="{{ Request::is('tipoPasos*') ? 'active' : '' }}">
                        <a href="{!! route('tipoPasos.index') !!}"></i><span> Tipo Pasos</span></a>
                    </li>
                    <li class="{{ Request::is('lugarPagos*') ? 'active' : '' }}">
                        <a href="{!! route('lugarPagos.index') !!}"></i><span> Lugares Pagos</span></a>
                    </li>
                    <li class="{{ Request::is('metodoPagos*') ? 'active' : '' }}">
                        <a href="{!! route('metodoPagos.index') !!}"><i class="fa fa-edit"></i><span> MetodoPagos</span></a>
                    </li>
                    <li class="{{ Request::is('metodoPagos*') ? 'active' : '' }}">
                        <a href="{!! route('ejecutors.index') !!}"><i class="fa fa-edit"></i><span> Ejecutores</span></a>
                    </li>
                    
                    
                    <li class="{{ Request::is('formaPresentacions*') ? 'active' : '' }}">
                        <a href="{!! route('formaPresentacions.index') !!}"><i class="fa fa-edit"></i><span> Formas de Presentacion</span></a>
                    </li>
                    <li class="{{ Request::is('fotoResultados*') ? 'active' : '' }}">
                        <a href="{!! route('fotoResultados.index') !!}"><i class="fa fa-edit"></i><span> Fotos de Resultados</span></a>
                    </li>
                    <li class="{{ Request::is('imagenResultados*') ? 'active' : '' }}">
                        <a href="{!! route('imagenResultados.index') !!}"><i class="fa fa-edit"></i><span> Imagen de Resultados</span></a>
                    </li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
