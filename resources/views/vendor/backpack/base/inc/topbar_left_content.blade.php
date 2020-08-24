
@if (backpack_user()->can('back_end'))

<div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle bg-gray-dark" type="button" data-toggle="dropdown" aria-expanded="true">
    Administración
  </button>
    <div class="dropdown-menu">
        @if (backpack_user()->can('dashboard'))
        <a class="dropdown-item btn-sm" href="{{ backpack_url('dashboard') }}"> <span>Dashboard</span></a>
        @endif
        @if (backpack_user()->can('backup-manager'))
        <a class="dropdown-item btn-sm" href="{{  backpack_url('backup')  }}"> <span>Backups</span></a>
        @endif
        @if (backpack_user()->can('log-manager'))
        <a class="dropdown-item btn-sm" href="{{ backpack_url('log') }}"> <span>Logs</span></a>
        @endif
        @if (backpack_user()->can('settings'))
        <a class="dropdown-item btn-sm" href="{{ backpack_url('setting') }}"> <span>Settings</span></a>
        @endif
        @if (backpack_user()->can('page-manager'))
        <a class="dropdown-item btn-sm" href="{{ backpack_url('page') }}"> <span>Page</span></a>
        @endif
        @if (backpack_user()->can('menu-crud'))
        <a class="dropdown-item btn-sm" href="{{ backpack_url('menu-item') }}"> <span>Menu Add</span></a>
        @endif
        @if (backpack_user()->can('file-manager'))
        <a class="dropdown-item btn-sm" href="{{ backpack_url('elfinder') }}"> <span>Archivos</span></a>
        @endif
        @if (backpack_user()->can('Activity'))
        <a class="dropdown-item btn-sm" href="{{ url('/activity') }}"><span>Log de Actividades</span></a>
        @endif
    </div>
</div>
</button>
    <div class="dropdown-menu">
                            </div>


@if (backpack_user()->can('permission-manager'))
<div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle bg-gray-dark" type="button" data-toggle="dropdown" aria-expanded="true">
    Autenticación
  </button>
    <div class="dropdown-menu">
        <a class="dropdown-item btn-sm" href="{{ backpack_url('user') }}"> <span>Usuarios</span></a>
        <a class="dropdown-item btn-sm" href="{{ backpack_url('role')  }}"> <span>Roles</span></a>
        <a class="dropdown-item btn-sm" href="{{ backpack_url('permission') }}"> <span>Permisos</span></a>
    </div>
</div>
@endif
@if (backpack_user()->can('news-crud'))
<div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle bg-gray-dark" type="button" data-toggle="dropdown" aria-expanded="true">
    Noticias
  </button>
    <div class="dropdown-menu">
        <a class="dropdown-item btn-sm" href="{{ backpack_url('article') }}"> <span>Artículos</span></a>
        <a class="dropdown-item btn-sm" href="{{ backpack_url('category') }}"> <span>Categorías</span></a>
        <a class="dropdown-item btn-sm" href="{{ backpack_url('tag') }}"> <span>Tags</span></a>
        {{-- <a class="dropdown-item btn-sm" href="{{ backpack_url('post') }}"> <span>Posts</span></a> --}}
    </div>
</div>
@endif


@endif

@if (backpack_user()->can('Menú Tickets Soporte'))
<div class="btn-group btn">
<a href='{{ backpack_url('tickethd') }}'>
<img border="0" alt="Tickets" src="https://blzcjg.dm.files.1drv.com/y4mkT7E3SI3Xt1Xfo7OXkxsnMMHKq_lbi5voh7URbEvCumhmpvkzxOWQ4VMxTizN1twST_OussT-l9NzwrjMCy1k3iAl46Wb_8IKtzoCPR36QsaeKi4RN2WyHt07_lRMDM6kb66jJ2ZhmsQhURiVuPu2EJlRcS9IjUemetzJhDpW3z0ZKAVcOP5vL9qIul9pEy9oZJ0w_KNXZcPxRLhOfh_2g?width=256&height=256&cropmode=none" width="40" height="40">
</a>
</div>
@endif
{{-- <div class="btn"><br></div> --}}
@if (backpack_user()->can('Menú Tickets SGI'))
<div class="btn-group btn">
<a href='{{ backpack_url('sgiticketincidente') }}'>
<img border="0" alt="Tickets Sgi" src="https://png.pngtree.com/png-clipart/20190705/original/pngtree-sgi-file-document-icon-png-image_4228128.jpg" width="40" height="40">
</a>
</div>
@endif
