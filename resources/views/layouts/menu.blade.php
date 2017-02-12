<li class="{{ Request::is('institucions*') ? 'active' : '' }}">
    <a href="{!! route('institucions.index') !!}"><i class="fa fa-edit"></i><span>Institucions</span></a>
</li>

<li class="{{ Request::is('documentosInstitucions*') ? 'active' : '' }}">
    <a href="{!! route('documentosInstitucions.index') !!}"><i class="fa fa-edit"></i><span>DocumentosInstitucions</span></a>
</li>

<li class="{{ Request::is('contactosInstitucions*') ? 'active' : '' }}">
    <a href="{!! route('contactosInstitucions.index') !!}"><i class="fa fa-edit"></i><span>ContactosInstitucions</span></a>
</li>

