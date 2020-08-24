<!-- total input -->
@include('crud::fields.inc.wrapper_start')

<?php


?>
<?php
$label1 = "Procesos";
$options1 = [9 => "Procesos de Apoyo", 18 => "Procesos Operativos no críticos/estratégicos", 30 => "Procesos operativos críticos/sistemas"];
$name1 = "procesos";

?>
<label>{!! $label1 !!}</label>
@include('crud::fields.inc.translatable_icon')
<select
name="{{ $name1 }}@if (isset($field['allows_multiple']) && $field['allows_multiple']==true)[]@endif"
class="item form-group col-md-5 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'"
value="{{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '' }}" @include('crud::fields.inc.attributes') @if (isset($field['allows_multiple']) && $field['allows_multiple']==true)multiple @endif>

    @if (isset($field['allows_null']) && $field['allows_null']==true)
    <option value="">-</option>
    @endif
    @if (count($options1))
    @foreach ($options1 as $key => $value)
    @if((old(square_brackets_to_dots($name1)) && (
    $key == old(square_brackets_to_dots($name1)) ||
    (is_array(old(square_brackets_to_dots($name1))) &&
    in_array($key, old(square_brackets_to_dots($name1)))))) ||
    (null === old(square_brackets_to_dots($name1)) &&
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


<?php
$label2 = "Usuarios";
$options2 = [12 => "1-50", 24 => "51-100", 40 => "+ 301"];
$name2 = "usuarios";

?>
<label>{!! $label2 !!}</label>
@include('crud::fields.inc.translatable_icon')
<select name="{{ $name2 }}@if (isset($field['allows_multiple']) && $field['allows_multiple']==true)[]@endif" class="item form-group col-md-5 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'" @include('crud::fields.inc.attributes') @if (isset($field['allows_multiple']) && $field['allows_multiple']==true)multiple @endif>

    @if (isset($field['allows_null']) && $field['allows_null']==true)
    <option value="">-</option>
    @endif
    @if (count($options2))
    @foreach ($options2 as $key => $value)
    @if((old(square_brackets_to_dots($name2)) && (
    $key == old(square_brackets_to_dots($name2)) ||
    (is_array(old(square_brackets_to_dots($name2))) &&
    in_array($key, old(square_brackets_to_dots($name2)))))) ||
    (null === old(square_brackets_to_dots($name2)) &&
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

<?php
$label3 = "Recursos";
$options3 = [9 => "Equipos Locales", 18 => "Conexión a Internet/redes", 30 => "Sistemas, correo electrónico"];
$name3 = "recursos";

?>
<label>{!! $label3 !!}</label>
@include('crud::fields.inc.translatable_icon')
<select name="{{ $name3 }}@if (isset($field['allows_multiple']) && $field['allows_multiple']==true)[]@endif" class="item form-group col-md-5 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'" @include('crud::fields.inc.attributes') @if (isset($field['allows_multiple']) && $field['allows_multiple']==true)multiple @endif>

    @if (isset($field['allows_null']) && $field['allows_null']==true)
    <option value="">-</option>
    @endif
    @if (count($options3))
    @foreach ($options3 as $key => $value)
    @if((old(square_brackets_to_dots($name3)) && (
    $key == old(square_brackets_to_dots($name3)) ||
    (is_array(old(square_brackets_to_dots($name3))) &&
    in_array($key, old(square_brackets_to_dots($name3)))))) ||
    (null === old(square_brackets_to_dots($name3)) &&
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

<?php
$label4 = "Urgencia";
$options4 = [9 => "Se opera con fallas", 18 => "se  opera con fallas criticas", 30 => "No se puede operar"];
$name4 = "urgencia";

?>
<label>{!! $label4 !!}</label>
@include('crud::fields.inc.translatable_icon')
<select name="{{ $name4 }}@if (isset($field['allows_multiple']) && $field['allows_multiple']==true)[]@endif" class="item form-group col-md-5 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light'" @include('crud::fields.inc.attributes') @if (isset($field['allows_multiple']) && $field['allows_multiple']==true)multiple @endif>

    @if (isset($field['allows_null']) && $field['allows_null']==true)
    <option value="">-</option>
    @endif
    @if (count($options4))
    @foreach ($options4 as $key => $value)
    @if((old(square_brackets_to_dots($name4)) && (
    $key == old(square_brackets_to_dots($name4)) ||
    (is_array(old(square_brackets_to_dots($name4))) &&
    in_array($key, old(square_brackets_to_dots($name4)))))) ||
    (null === old(square_brackets_to_dots($name4)) &&
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

{{-- <input name="total" id="spTotal" value=0 class="item form-group col-md-1 h-10 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light" readonly> --}}
{{-- <label for="prioridad" class="form-group">Prioridad:</label> --}}
<label for="sum">Resultado:</label>
<span id="sum"></span>
<span id="pri"></span>


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
    $(document).ready(function() {

                //iterate through each textboxes and add keyup
                //handler to trigger sum event
                $(getElementsbyAttribute('title', 'item').each(function() {

                        $(this).keyup(function() {
                            calculateSum();
                        });
                    });

                });

            function calculateSum() {

                var sum = 0;
                //iterate through each textboxes and add the values
                $(getElementsbyAttribute('title', 'item').each(function() {

                        //add only if the value is number
                        if (!isNaN(this.value) && this.value.length != 0) {
                            sum += parseFloat(this.value);
                        }

                    });
                    //.toFixed() method will roundoff the final sum to 2 decimal places
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
                }
</script>
@endpush

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
