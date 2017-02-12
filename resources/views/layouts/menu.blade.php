<li class="{{ Request::is('institucions*') ? 'active' : '' }}">
    <a href="{!! route('institucions.index') !!}"><i class="fa fa-edit"></i><span>Institucions</span></a>
</li>

<li class="{{ Request::is('documentosInstitucions*') ? 'active' : '' }}">
    <a href="{!! route('documentosInstitucions.index') !!}"><i class="fa fa-edit"></i><span>DocumentosInstitucions</span></a>
</li>

<li class="{{ Request::is('contactosInstitucions*') ? 'active' : '' }}">
    <a href="{!! route('contactosInstitucions.index') !!}"><i class="fa fa-edit"></i><span>ContactosInstitucions</span></a>
</li>

<li class="{{ Request::is('horariosInstitucions*') ? 'active' : '' }}">
    <a href="{!! route('horariosInstitucions.index') !!}"><i class="fa fa-edit"></i><span>HorariosInstitucions</span></a>
</li>

<li class="{{ Request::is('unidads*') ? 'active' : '' }}">
    <a href="{!! route('unidads.index') !!}"><i class="fa fa-edit"></i><span>Unidads</span></a>
</li>

<li class="{{ Request::is('documentosUnidads*') ? 'active' : '' }}">
    <a href="{!! route('documentosUnidads.index') !!}"><i class="fa fa-edit"></i><span>DocumentosUnidads</span></a>
</li>

