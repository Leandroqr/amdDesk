<!-- total input -->
@include('crud::fields.inc.wrapper_start')
    <label>{!! $field['label'] !!}</label>
    @include('crud::fields.inc.translatable_icon')

    @if(isset($field['prefix']) || isset($field['suffix'])) <div class="input-group"> @endif
        @if(isset($field['prefix'])) <div class="input-group-prepend"><span class="input-group-text">{!! $field['prefix'] !!}</span></div> @endif
        <input
        	type="number"
        	name="{{ $field['name'] }}"
               data-init-function="calculateSum"
               data-formula="{{ $field['formula'] }}"
            value="{{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '' }}"
            @include('crud::fields.inc.attributes')
            >
            <label for="sum">Resultado:</label>
        <span id="sum"></span>
        <span id="pri"></span>
        @if(isset($field['suffix'])) <div class="input-group-append"><span class="input-group-text">{!! $field['suffix'] !!}</span></div> @endif

    @if(isset($field['prefix']) || isset($field['suffix'])) </div> @endif

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
        $(element.formula).each(function() {

            $(this).keyup(function() {
                calculateSum();
            });
        });

    });

    function calculateSum(element) {

        var sum = 0;
        //iterate through each textboxes and add the values
        $(element.formula).each(function() {

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
