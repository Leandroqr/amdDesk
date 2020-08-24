<!-- total input -->
@include('crud::fields.inc.wrapper_start')
<label>{!! $field['label'] !!}</label>
@include('crud::fields.inc.translatable_icon')

@if(isset($field['prefix']) || isset($field['suffix'])) <div class="input-group"> @endif
    @if(isset($field['prefix'])) <div class="input-group-prepend"><span class="input-group-text">{!! $field['prefix'] !!}</span></div> @endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <div class="contentClass form-group col-md-12 h-80 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down">
        <div>
        <?php
            $field['label'] = 'Procesos Afectados';
            $field['name'] = 'procesos';
            $field['options'] = array(9 => 'Procesos de Apoyo', 18 => 'Procesos Operativos no críticos/estratégicos', 30 => 'Procesos operativos críticos/sistemas');
        ?>
        <select
        class="item col-md-3 h-10 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light"
        name="{{ $field['name'] }}@if (isset($field['allows_multiple']) && $field['allows_multiple']==true)[]@endif"
        @include('crud::fields.inc.attributes')
        @if (isset($field['allows_multiple']) && $field['allows_multiple']==true)multiple @endif
        >

        @if (isset($field['allows_null']) && $field['allows_null']==true)
            <option value="" selected="selected">-</option>
        @endif

        @if (count($field['options']))
            @foreach ($field['options'] as $key => $value)
                @if((old(square_brackets_to_dots($field['name'])) && (
                        $key == old(square_brackets_to_dots($field['name'])) ||
                        (is_array(old(square_brackets_to_dots($field['name']))) &&
                        in_array($key, old(square_brackets_to_dots($field['name'])))))) ||
                        (null === old(square_brackets_to_dots($field['name'])) &&
                            ((isset($field['value']) && (
                                        $key == $field['value'] || (
                                                is_array($field['value']) &&
                                                in_array($key, $field['value'])
                                                )
                                        )) ||
                                (!isset($field['value']) && isset($field['default']) &&
                                ($key == $field['default'] || (
                                                is_array($field['default']) &&
                                                in_array($key, $field['default'])
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
        {{-- <label for="Procesos" class="input-group">Procesos Afectados:</label>
        <select

        name="procesos"
        id="procesos"
        class="item col-md-3 h-10 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light"
        selected="selected">
            <option value=9>Procesos de Apoyo</option>
            <option value=18>Procesos Operativos no críticos/estratégicos</option>
            <option value=30>Procesos operativos críticos/sistemas</option>
        </select> --}}
        </div>
        <label for="Usuarios" class="input-group">Usuarios Afectados:</label>
        <select
        name="usuarios"
        id="usuarios"
        class="item col-md-3 h-10 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light"
        value="old(square_brackets_to_dots('usuarios'))"
        selected="selected">
            <option value=12>1-50</option>
            <option value=24>51-100</option>
            <option value=40>+ 301</option>
        </select>

        <label for="Recursos" class="input-group">Recursos Afectados:</label>
        <select
        name="recursos"
        id="recursos"
        class="item col-md-3 h-10 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light"
        value="old(square_brackets_to_dots('recursos'))"
        selected="selected">
            <option value=9>Equipos Locales</option>
            <option value=18>Conexión a Internet/redes</option>
            <option value=30>Sistemas, correo electrónico</option>
        </select>

        <label for="Urgencia" class="input-group">Urgencia:</label>
        <select
        name="urgencia" id="urgencia"
        class="item col-md-3 h-10 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light"
        value="old(square_brackets_to_dots('urgencia'))"
        selected="selected">
            <option value=9>Se opera con fallas</option>
            <option value=18>Se opera con fallas criticas</option>
            <option value=30>No se puede operar</option>

        </select>

        <label>Resultado:</label>
        <span id="sum"></span>
        <span id="pri"></span>
        <span id="totaltime"></span>
    </div>
    @if(isset($field['suffix'])) <div class="input-group-append"><span class="input-group-text">{!! $field['suffix'] !!}</span></div> @endif

    @if(isset($field['prefix']) || isset($field['suffix']))
</div> @endif

{{-- HINT --}}
@if (isset($field['hint']))
<p class="help-block">{!! $field['hint'] !!}</p>
@endif

@include('crud::fields.inc.wrapper_end')

{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->fieldTypeNotLoaded($field))
@php
$crud->markFieldTypeAsLoaded($field);
@endphp

{{-- FIELD JS - will be loaded in the after_scripts section --}}
@push('crud_fields_scripts')

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

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
