<!-- total input -->
@include('crud::fields.inc.wrapper_start')
<label>{!! $field['label'] !!}</label>
@include('crud::fields.inc.translatable_icon')

@if(isset($field['prefix']) || isset($field['suffix'])) <div class="input-group"> @endif
    @if(isset($field['prefix'])) <div class="input-group-prepend"><span class="input-group-text">{!! $field['prefix'] !!}</span></div> @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <div class="contentClass form-group col-md-12 h-80 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down">
        <label for="Procesos" class="input-group">Procesos Afectados:</label>
        <select
        name="procesos"
        id="procesos"
        class="item col-md-3 h-10 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light"
        >

            <option value=9>Procesos de Apoyo</option>
            <option value=18>Procesos Operativos no críticos/estratégicos</option>
            <option value=30>Procesos operativos críticos/sistemas</option>
        </select>

        <label for="Usuarios" class="input-group">Usuarios Afectados:</label>
        <select
        name="usuarios"
        id="usuarios" class="item col-md-3 h-10 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light"
        value="{{ old(square_brackets_to_dots("usuarios")) ?? $field['value'] ?? $field['default'] ?? '' }}">
            <option value=12>1-50</option>
            <option value=24>51-100</option>
            <option value=40>+ 301</option>
        </select>

        <label for="Recursos" class="input-group">Recursos Afectados:</label>
        <select name="recursos" id="recursos" class="item col-md-3 h-10 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light">
            <option value=9>Equipos Locales</option>
            <option value=18>Conexión a Internet/redes</option>
            <option value=30>Sistemas, correo electrónico</option>
        </select>

        <label for="Urgencia" class="input-group">Urgencia:</label>
        <select name="urgencia" id="urgencia" class="item col-md-3 h-10 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light">
            <option value=9>Se opera con fallas</option>
            <option value=18>Se opera con fallas criticas</option>
            <option value=30>No se puede operar</option>

        </select>


        {{-- <input name="total" id="spTotal" value=0 class="item form-group col-md-1 h-10 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light" readonly> --}}
        {{-- <label for="prioridad" class="form-group">Prioridad:</label> --}}
        <label id="pri">Resultado:</label>
        <span id="sum"></span>
        <span id="pri"></span>

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
    $(document).ready(function() {

        //iterate through each textboxes and add keyup
        //handler to trigger sum event
        $(".item").each(function() {

            $(this).keyup(function() {
                calculateSum();
            });
        });

    });

    function calculateSum() {

        var sum = 0;
        //iterate through each textboxes and add the values
        $(".item").each(function() {

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
