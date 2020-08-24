@include('crud::fields.inc.wrapper_start')

<div data-init-function="bpFieldInitsumElement" class="input-group col-md-12 h-200 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down">

        {{-- ******************************************************** --}}
        <div id="procesos" class="contentClass form-group col-md-3 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light">
        <?php
            $field1['label'] ="Procesos Afectados";
            $field1['name'] = "procesos";
            $field1['options'] = array(9 => 'Procesos de Apoyo', 18 => 'Procesos Operativos no críticos/estratégicos', 30 => 'Procesos operativos críticos/sistemas');
            $field1['default'] = 9;
            $field1['type'] = "select2_from_array";
            $field1['allows null'] = false;
            $field1['tab'] = "Valoración";
            $field1['wrapperAttributes'] = array(
                     'class' => 'item',
                     'class' =>
                     'd-none item form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light');
        ?>
        <!-- select2 from array -->
        @include('crud::fields.inc.wrapper_start')
        <label>{!! $field1['label'] !!}</label>
        <select
        name="{{ $field1['name'] }}@if (isset($field1['allows_multiple']) && $field1['allows_multiple']==true)[]@endif"
        style="width: 100%"
        data-init-function="bpFieldInitSelect2FromArrayElement"
        @include('crud::fields.inc.attributes', ['default_class' =>  'form-control select2_from_array item'])
        @if (isset($field1['allows_multiple']) && $field1['allows_multiple']==true)multiple @endif
        >

        @if (isset($field1['allows_null']) && $field1['allows_null']==true)
            <option value="">-</option>
        @endif

        @if (count($field1['options']))
            @foreach ($field1['options'] as $key => $value)
                @if((old(square_brackets_to_dots($field1['name'])) && (
                        $key == old(square_brackets_to_dots($field1['name'])) ||
                        (is_array(old(square_brackets_to_dots($field1['name']))) &&
                        in_array($key, old(square_brackets_to_dots($field1['name'])))))) ||
                        (null === old(square_brackets_to_dots($field1['name'])) &&
                            ((isset($field1['value']) && (
                                        $key == $field1['value'] || (
                                                is_array($field1['value']) &&
                                                in_array($key, $field1['value'])
                                                )
                                        )) ||
                                (!isset($field1['value']) && isset($field1['default']) &&
                                ($key == $field1['default'] || (
                                                is_array($field1['default']) &&
                                                in_array($key, $field1['default'])
                                            )
                                        )
                                ))
                        ))
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                @else
                    <option value="{{ $key }}">{{ $value }}</option>
                @endif
            @endforeach
        @endif
    </select>

    {{-- HINT --}}
    @if (isset($field1['hint']))
        <p class="help-block">{!! $field1['hint'] !!}</p>
    @endif
@include('crud::fields.inc.wrapper_end')

</div>
{{-- @if ($crud->fieldTypeNotLoaded($field1))
@php
$crud->markFieldTypeAsLoaded($field1);
@endphp --}}

{{-- ******************************************************** --}}

<div id="usuarios" class="contentClass form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light">
        <?php
            $field2['label'] ="Usuarios Afectados";
            $field2['name'] = "usuarios";
            $field2['options'] = array(12 => '1-50', 24 => '51-100', 40 => '+ 301');
            $field2['default'] = 12;
            $field2['type'] = "select2_from_array";
            $field2['allows null'] = false;
            $field2['tab'] = "Valoración";
            $field2['wrapperAttributes'] = array(
                     'class' => 'item',
                     'class' =>
                     'd-none item form-group col-md-4 h-100 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light');
        ?>
        <!-- select2 from array -->
    @include('crud::fields.inc.wrapper_start')
    <label>{!! $field2['label'] !!}</label>
    <select
        name="{{ $field2['name'] }}@if (isset($field2['allows_multiple']) && $field2['allows_multiple']==true)[]@endif"
        style="width: 100%"
        data-init-function="bpFieldInitSelect2FromArrayElement"
        @include('crud::fields.inc.attributes', ['default_class' =>  'form-control select2_from_array item'])
        @if (isset($field2['allows_multiple']) && $field2['allows_multiple']==true)multiple @endif
        >

        @if (isset($field2['allows_null']) && $field2['allows_null']==true)
            <option value="">-</option>
        @endif

        @if (count($field2['options']))
            @foreach ($field2['options'] as $key => $value)
                @if((old(square_brackets_to_dots($field2['name'])) && (
                        $key == old(square_brackets_to_dots($field2['name'])) ||
                        (is_array(old(square_brackets_to_dots($field2['name']))) &&
                        in_array($key, old(square_brackets_to_dots($field2['name'])))))) ||
                        (null === old(square_brackets_to_dots($field2['name'])) &&
                            ((isset($field2['value']) && (
                                        $key == $field2['value'] || (
                                                is_array($field2['value']) &&
                                                in_array($key, $field2['value'])
                                                )
                                        )) ||
                                (!isset($field2['value']) && isset($field2['default']) &&
                                ($key == $field2['default'] || (
                                                is_array($field2['default']) &&
                                                in_array($key, $field2['default'])
                                            )
                                        )
                                ))
                        ))
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                @else
                    <option value="{{ $key }}">{{ $value }}</option>
                @endif
            @endforeach
        @endif
    </select>

    {{-- HINT --}}
    @if (isset($field2['hint']))
        <p class="help-block">{!! $field2['hint'] !!}</p>
    @endif
@include('crud::fields.inc.wrapper_end')

</div>
{{-- @if ($crud->fieldTypeNotLoaded($field2))
@php
$crud->markFieldTypeAsLoaded($field2);
@endphp --}}
{{-- ******************************************************** --}}

<div id="recursos" class="contentClass form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down">
        <?php
            $field3['label'] ="Recursos Afectados";
            $field3['name'] = "recursos";
            $field3['options'] = array(9 => 'Equipos Locales', 18 => 'Conexión a Internet/redes', 30 => 'Sistemas, correo electrónico');
            $field3['default'] = 9;
            $field3['type'] = "select2_from_array";
            $field3['allows null'] = false;
            $field3['tab'] = "Valoración";
            $field3['wrapperAttributes'] = array(
                     'class' => 'item',
                     'class' =>
                     'd-none item form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light');
        ?>
        <!-- select2 from array -->
    @include('crud::fields.inc.wrapper_start')
    <label>{!! $field3['label'] !!}</label>
    <select
        name="{{ $field3['name'] }}@if (isset($field3['allows_multiple']) && $field3['allows_multiple']==true)[]@endif"
        style="width: 100%"
        data-init-function="bpFieldInitSelect2FromArrayElement"
        @include('crud::fields.inc.attributes', ['default_class' =>  'form-control select2_from_array item'])
        @if (isset($field3['allows_multiple']) && $field3['allows_multiple']==true)multiple @endif
        >

        @if (isset($field3['allows_null']) && $field3['allows_null']==true)
            <option value="">-</option>
        @endif

        @if (count($field3['options']))
            @foreach ($field3['options'] as $key => $value)
                @if((old(square_brackets_to_dots($field3['name'])) && (
                        $key == old(square_brackets_to_dots($field3['name'])) ||
                        (is_array(old(square_brackets_to_dots($field3['name']))) &&
                        in_array($key, old(square_brackets_to_dots($field3['name'])))))) ||
                        (null === old(square_brackets_to_dots($field3['name'])) &&
                            ((isset($field3['value']) && (
                                        $key == $field3['value'] || (
                                                is_array($field3['value']) &&
                                                in_array($key, $field3['value'])
                                                )
                                        )) ||
                                (!isset($field3['value']) && isset($field3['default']) &&
                                ($key == $field3['default'] || (
                                                is_array($field3['default']) &&
                                                in_array($key, $field3['default'])
                                            )
                                        )
                                ))
                        ))
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                @else
                    <option value="{{ $key }}">{{ $value }}</option>
                @endif
            @endforeach
        @endif
    </select>

    {{-- HINT --}}
    @if (isset($field3['hint']))
        <p class="help-block">{!! $field3['hint'] !!}</p>
    @endif
@include('crud::fields.inc.wrapper_end')

</div>
{{-- @if ($crud->fieldTypeNotLoaded($field3))
@php
$crud->markFieldTypeAsLoaded($field3);
@endphp --}}
{{-- ******************************************************** --}}


<div id="urgencia" class="contentClass form-group col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down">
        <?php
            $field4['label'] ="Urgencia";
            $field4['name'] = "urgencia";
            $field4['options'] = array(9 => 'Se opera con fallas', 18 => 'se  opera con fallas criticas', 30 => 'No se puede operar');
            $field4['default'] = 9;
            $field4['type'] = "select2_from_array";
            $field4['allows null'] = false;
            $field4['tab'] = "Valoración";
            $field4['wrapperAttributes'] = array(
                     'class' => 'item',
                     'class' =>
                     'd-none item form-group col-md-4 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light');
        ?>
        <!-- select2 from array -->
    @include('crud::fields.inc.wrapper_start')
    <label>{!! $field4['label'] !!}</label>
    <select
        name="{{ $field4['name'] }}@if (isset($field4['allows_multiple']) && $field4['allows_multiple']==true)[]@endif"
        style="width: 100%"
        data-init-function="bpFieldInitSelect2FromArrayElement"
        @include('crud::fields.inc.attributes', ['default_class' =>  'form-control select2_from_array item'])
        @if (isset($field4['allows_multiple']) && $field4['allows_multiple']==true)multiple @endif
        >

        @if (isset($field4['allows_null']) && $field4['allows_null']==true)
            <option value="">-</option>
        @endif

        @if (count($field4['options']))
            @foreach ($field4['options'] as $key => $value)
                @if((old(square_brackets_to_dots($field4['name'])) && (
                        $key == old(square_brackets_to_dots($field4['name'])) ||
                        (is_array(old(square_brackets_to_dots($field4['name']))) &&
                        in_array($key, old(square_brackets_to_dots($field4['name'])))))) ||
                        (null === old(square_brackets_to_dots($field4['name'])) &&
                            ((isset($field['value']) && (
                                        $key == $field4['value'] || (
                                                is_array($field4['value']) &&
                                                in_array($key, $field4['value'])
                                                )
                                        )) ||
                                (!isset($field4['value']) && isset($field4['default']) &&
                                ($key == $field4['default'] || (
                                                is_array($field4['default']) &&
                                                in_array($key, $field4['default'])
                                            )
                                        )
                                ))
                        ))
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                @else
                    <option value="{{ $key }}">{{ $value }}</option>
                @endif
            @endforeach
        @endif
    </select>

    {{-- HINT --}}
    @if (isset($field4['hint']))
        <p class="help-block">{!! $field4['hint'] !!}</p>
    @endif
@include('crud::fields.inc.wrapper_end')

</div>
{{-- @if ($crud->fieldTypeNotLoaded($field4))
@php
$crud->markFieldTypeAsLoaded($field4);
@endphp --}}

{{-- ******************************************************** --}}

        <label  id="resultado" class="btn btn-secundary col-md-1 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down">Resultado:</label>
        <span  class="btn btn-secundary col-md-1 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down" id="sum"></span>
        <span name="prioridad" class="btn btn-secundary col-md-1 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down" id="pri"></span>

</div>

@include('crud::fields.inc.wrapper_end')
{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}

    @push('crud_fields_styles')
    <!-- include select2 css-->
    <link href="{{ asset('packages/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('packages/select2-bootstrap-theme/dist/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    @endpush
{{-- FIELD JS - will be loaded in the after_scripts section --}}
@push('crud_fields_scripts')
<!-- include select2 js-->
    <script src="{{ asset('packages/select2/dist/js/select2.full.min.js') }}"></script>
    @if (app()->getLocale() !== 'en')
    <script src="{{ asset('packages/select2/dist/js/i18n/' . app()->getLocale() . '.js') }}"></script>
    @endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
        function bpFieldInitSelect2FromArrayElement(element) {
            if (!element.hasClass("select2-hidden-accessible"))
                {
                    element.select2({
                        theme: "bootstrap"
                    }).on('select2:unselect', function(e) {
                        if ($(this).attr('multiple') && $(this).val().length == 0) {
                            $(this).val(null).trigger('change');
                        }
                    });
                }
        }
    </script>


<script>


var total = 0;

//I am using this to simulate your ajax function since I don't have access to your database
$("select").on("change", function() {

  //Place the following code at the bottom of your ajax success function

  //clear out the total to
  //prevent old prices from being added to the total
  sum = 0;

  $(".item").each(function() {

    //if the value is not an empty string
    if ($(this).val() !== "") {

      //add the price to the total
      sum += parseInt($(this).val());

    }

  }); //end each function

  //update the total
  $("#sum").html(sum.toFixed(2));
        var pri = sum;
        if (sum >= 79) {
            pri = "Alta"
        } else {
            if (sum >= 40) {
                pri = "Media"
            } else {
                pri = "Baja"
            }
        }
        $("#pri").html(pri);

}); //end on change event





</script>
@endpush

{{-- @endif --}}
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
