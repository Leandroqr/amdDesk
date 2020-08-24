@extends(backpack_view('blank'))
@section('content')
<div class="embed-responsive embed-responsive-21by9">
<iframe width="800" height="600" src="https://infobolsillo.web.app/" frameborder="0" allowFullScreen="true"></iframe>
</div>

{{-- <div class="flex">
<a href='{{ backpack_url('tickethd') }}'>
<img border="0" alt="Tickets" src="https://png.pngtree.com/png-clipart/20190705/original/pngtree-sgi-file-document-icon-png-image_4228128.jpg" width="50" height="50">
</a>

<a href='{{ backpack_url('tickethd') }}'>
<img border="0" alt="Tickets" src="https://blzcjg.dm.files.1drv.com/y4mkT7E3SI3Xt1Xfo7OXkxsnMMHKq_lbi5voh7URbEvCumhmpvkzxOWQ4VMxTizN1twST_OussT-l9NzwrjMCy1k3iAl46Wb_8IKtzoCPR36QsaeKi4RN2WyHt07_lRMDM6kb66jJ2ZhmsQhURiVuPu2EJlRcS9IjUemetzJhDpW3z0ZKAVcOP5vL9qIul9pEy9oZJ0w_KNXZcPxRLhOfh_2g?width=256&height=256&cropmode=none" width="50" height="50">
</a>
</div> --}}
{{-- <a href='{{ backpack_url('tickethd') }}'>
<img border="0" alt="Tickets" src="https://blzcjg.dm.files.1drv.com/y4mkT7E3SI3Xt1Xfo7OXkxsnMMHKq_lbi5voh7URbEvCumhmpvkzxOWQ4VMxTizN1twST_OussT-l9NzwrjMCy1k3iAl46Wb_8IKtzoCPR36QsaeKi4RN2WyHt07_lRMDM6kb66jJ2ZhmsQhURiVuPu2EJlRcS9IjUemetzJhDpW3z0ZKAVcOP5vL9qIul9pEy9oZJ0w_KNXZcPxRLhOfh_2g?width=256&height=256&cropmode=none" width="100" height="100">
</a>

<a href='{{ backpack_url('tickethd') }}'>
<img border="0" alt="Tickets" src="https://blzcjg.dm.files.1drv.com/y4mkT7E3SI3Xt1Xfo7OXkxsnMMHKq_lbi5voh7URbEvCumhmpvkzxOWQ4VMxTizN1twST_OussT-l9NzwrjMCy1k3iAl46Wb_8IKtzoCPR36QsaeKi4RN2WyHt07_lRMDM6kb66jJ2ZhmsQhURiVuPu2EJlRcS9IjUemetzJhDpW3z0ZKAVcOP5vL9qIul9pEy9oZJ0w_KNXZcPxRLhOfh_2g?width=256&height=256&cropmode=none" width="100" height="100">
</a> --}}


{{-- <div class="row"> row col-sm-6 card card-body card-text
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div> --}}




@endsection

{{-- En este espacio se pueden agregar widgets y contenido grafico --}}
@section('content-flex')

{{--
@php
        $widgets['after_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => '<h3>Bienvenidos! AmovilDesk </h3><h3>Asistencia Movil S.A.S.</h3>',
        'content'     => 'Ideas del Futuro Desarrolladas Hoy.',
        'button_link' => backpack_url('logout'),
        'button_text' => 'Salir del Sistema',
        'wrapper' => [
        'class' => 'col-sm-6 col-md-12 btn bg-gray-dark', // customize the class on the parent element (wrapper)
        'style' => 'border-radius: 10px;',]
         ];
         $widgets['after_content'][] = [
        'type'       => 'alert',
        'heading'     => 'Visión',
        'content' => 'Ser un Aliado tecnológico y estratégico con mayor posicionamiento tanto a nivel nacional como internacional en plataformas de servicio móviles y web. Además, ser una empresa innovadora en soluciones de distribución y logística de manera sencilla, facilitando datos reales, exactos y en línea; que de la mano de la tecnología de la información nos permita mejorar continuamente y estar a la vanguardia de acuerdo con los cambios globales del mercado e impulsando el crecimiento personal y profesional de nuestros colaboradores en un horizonte temporal 2018-2020.',
        'wrapper' => [
        'class' => 'col-sm-6 col-md-12 btn bg-gray-dark', // customize the class on the parent element (wrapper)
        'style' => 'border-radius: 10px;',]
        ];
        $widgets['after_content'][] = [
        'type'       => 'alert',
        'heading'     => 'Misión',
        'content' => 'Somos una empresa especializada en el desarrollo de soluciones móviles y web, aplicando metodologías e innovación tecnológica que responden a la automatización, modelamiento, optimización y mejora de procesos. Mediante un equipo multidisciplinario, competente, comprometido con la calidad y que permite aportar ideas futuras desarrollas hoy para la generación de valor de todas las partes interesadas.',
        'wrapper' => [
        'class' => 'col-sm-6 col-md-12 btn bg-gray-dark', // customize the class on the parent element (wrapper)
        'style' => 'border-radius: 10px;',]
        ];
        $widgets['after_content'][] = [
        'type'       => 'alert',
        'heading'     => 'Política Integral',
        'content' => 'Asistencia Móvil SAS es una empresa que brinda soluciones tecnológicas para empresas de consumo masivo. Apoyados en un equipo de trabajo comprometido para lograr que nuestros clientes y aliados tecnológicos tengan herramientas que mejoren internamente sus procesos junto con el soporte técnico y acompañamiento necesarios, de acuerdo con las especificaciones y requerimientos.
        Estamos comprometidos en ofrecer productos y servicios de calidad, mejorar cada uno de los procesos, promover el desarrollo integral, humano y profesional a nuestros colaboradores. A su vez está convencida que la satisfacción de las partes interesadas, la preservación de la confidencialidad, integridad, disponibilidad de la información y de la salud y seguridad de nuestros colaboradores, bajo un enfoque de prevención de riesgos, mejora continua y autocontrol en los procesos son clave para lograr el éxito y la continuidad de nuestra empresa.
',
        'wrapper' => [
        'class' => 'col-sm-6 col-md-12 btn bg-gray-dark', // customize the class on the parent element (wrapper)
        'style' => 'border-radius: 10px;',]
        ];


@endphp --}}

@endsection
