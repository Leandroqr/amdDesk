@include('crud::fields.inc.wrapper_start')
    <label>{!! $field['label'] !!}</label>
    @include('crud::fields.inc.translatable_icon')

    @if(isset($field['prefix']) || isset($field['suffix'])) <div class="input-group"> @endif
        @if(isset($field['prefix'])) <div class="input-group-prepend"><span class="input-group-text">{!! $field['prefix'] !!}</span></div> @endif
        <input
            id="pri"
            name="{{ $field['name'] }}"
            value="{{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '' }}"
            @include('crud::fields.inc.attributes')
        >
    {{-- <label  id="resultado" class="btn btn-secundary col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down">Resultado:</label>
    <span  class="btn btn-secundary col-md-2 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down" id="sum"></span>
    <span class="btn btn-primary col-md-5 h-25 shadow-lg p-1 mb-2 bg-light rounded text-dark bg-light bold-labels bg-down">Recuerda Ingresar la Prioridad &#x1f51c</span> --}}
        @if(isset($field['suffix'])) <div class="input-group-append"><span class="input-group-text">{!! $field['suffix'] !!} </span></div> @endif
    @if(isset($field['prefix']) || isset($field['suffix'])) </div> @endif

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>


{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}


{{-- FIELD JS - will be loaded in the after_scripts section --}}
@push('crud_fields_scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
        $("#pri").val(pri);

}); //end on change event





</script>
@endpush

{{-- @endif --}}
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
