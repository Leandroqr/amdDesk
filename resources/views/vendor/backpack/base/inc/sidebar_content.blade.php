<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<br>
@if (backpack_user()->can('Menú Área Empresa'))
<li class="nav-item btn-sm">AREA EMPRESA</li>
    @if (backpack_user()->can('Menú Data'))
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle btn-sm" href="#"><i class='nav-icon la la-list'></i>DATA</a>
                <ul class="nav-dropdown-items">
                    @if (backpack_user()->can('Menú Países'))
                        <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('pais') }}'><i class='nav-icon la la-terminal'></i> Paises</a></li>
                    @endif
                    @if (backpack_user()->can('Menú Departamentos'))
                        <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('departamento') }}'><i class='nav-icon la la-terminal'></i> Departamentos</a></li>
                    @endif
                    @if (backpack_user()->can('Menú Ciudades'))
                        <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('ciudad') }}'><i class='nav-icon la la-terminal'></i> Ciudades</a></li>
                    @endif
                    @if (backpack_user()->can('Menú Tipo Cliente'))
                        <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('tipocl') }}'><i class='nav-icon la la-terminal'></i> Tipo Cliente</a></li>
                    @endif
                    @if (backpack_user()->can('Menú Clientes'))
                        <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('cliente') }}'><i class='nav-icon la la-terminal'></i> Clientes</a></li>
                    @endif
                </ul>
            </li>
    @endif
@if (backpack_user()->can('Menú Soporte'))
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle btn-sm" href="#"><i class='nav-icon la la-list'></i>SOPORTE</a>
        <ul class="nav-dropdown-items">
        @if (backpack_user()->can('Menú Secciones'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('seccion') }}'><i class='nav-icon la la-terminal'></i> Secciones</a></li>
        @endif
        @if (backpack_user()->can('Menú Grupos'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('grupo') }}'><i class='nav-icon la la-terminal'></i> Grupos</a></li>
        @endif
        @if (backpack_user()->can('Menú Aplicaciones'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('aplicacion') }}'><i class='nav-icon la la-terminal'></i> Aplicaciones</a></li>
        @endif
        @if (backpack_user()->can('Menú Matriz Soporte'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('matrizop') }}'><i class='nav-icon la la-terminal'></i> Matriz</a></li>
        @endif
        @if (backpack_user()->can('Menú Estados'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('estado') }}'><i class='nav-icon la la-terminal'></i> Estados</a></li>
        @endif
        @if (backpack_user()->can('Menú Modelo de Atención'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('modeloatencion') }}'><i class='nav-icon la la-terminal'></i> Modelo de Atención</a></li>
        @endif
    </ul>
</li>
@if (backpack_user()->can('Menú SGI'))
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle btn-sm" href="#"><i class='nav-icon la la-list'></i>SGI</a>
        <ul class="nav-dropdown-items">
        @if (backpack_user()->can('Menú Activo de Información'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('sgiactivoincidente') }}'><i class='nav-icon la la-terminal'></i> Activo de Información</a></li>
        @endif
        @if (backpack_user()->can('Menú Estado Actual'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('sgiestadoactualincidente') }}'><i class='nav-icon la la-terminal'></i> Estado Actual</a></li>
        @endif
        @if (backpack_user()->can('Menú Estado SGI'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('sgiestadoincidente') }}'><i class='nav-icon la la-terminal'></i> Estado</a></li>
        @endif
        @if (backpack_user()->can('Menú Lugar SGI'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('sgilugarincidente') }}'><i class='nav-icon la la-terminal'></i> Lugar</a></li>
        @endif
        @if (backpack_user()->can('Menú Matriz SGI'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('sgimatrizincidente') }}'><i class='nav-icon la la-terminal'></i> Matriz</a></li>
        @endif
        @if (backpack_user()->can('Menú Prioridad SGI'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('sgiprioridadincidente') }}'><i class='nav-icon la la-terminal'></i> Prioridad</a></li>
        @endif
        @if (backpack_user()->can('Menú Tipo Incidente SGI'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('sgitipoincidente') }}'><i class='nav-icon la la-terminal'></i> Tipo</a></li>
        @endif
    </ul>
</li>
@endif
<br>
@if (backpack_user()->can('Menú Área de Usuarios'))
<li class="nav-item btn-sm">AREA DE USUARIOS</li>
    @if (backpack_user()->can('Menú Tickets Soporte'))
    <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('tickethd') }}'><i class='nav-icon la la-terminal'></i> Ticket Soporte</a></li>
    @endif
    @if (backpack_user()->can('Menú Tickets Todos'))
    <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('ticketlist') }}'><i class='nav-icon la la-terminal'></i>Lista de Tickets Soporte</a></li>
    @endif
    @if (backpack_user()->can('Menú Tickets SGI'))
    <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('sgiticketincidente') }}'><i class='nav-icon la la-terminal'></i> Ticket Sgi</a></li>
    @endif
@endif
@endif
@endif



<br>
@if (backpack_user()->can('Área BI'))
<li class="nav-item btn-sm">AREA BI</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle btn-sm" href="#"><i class='nav-icon la la-list'></i>Área Informes</a>
        <ul class="nav-dropdown-items">
            @if (backpack_user()->can('Informe1'))
            <li class='nav-item btn-sm'><a class='nav-link' href='{{ backpack_url('recaudo') }}'><i class='nav-icon la la-terminal'></i>Recaudo Alpina</a></li>
            @endif
            @if (backpack_user()->can('Informe2'))
            <li class='nav-item btn-sm'><a class='nav-link' href='https://app.powerbi.com/view?r=eyJrIjoiYmFiOWIyZDgtMzkwNS00ZjliLTliMmUtNTIxMjVhMmIxYTYxIiwidCI6IjI0ZWFmNzlhLTczZjktNDhiZC04NjdhLTYzYmJhMzEyZDU0OCJ9'><i class='nav-icon la la-terminal'></i> Secciones</a></li>
            @endif
        </ul>
</li>
@endif










@can('agentes')

@endcan

