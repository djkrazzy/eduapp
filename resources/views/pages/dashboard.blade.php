{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}

    <div class="row">

            @include('pages.widgets.wizard')



    </div>

@endsection
{{-- Styles Section --}}
@section('styles')
<link href="{{ asset('css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css"/>


@endsection
{{-- Scripts Section --}}
@section('scripts')


    <script src="{{ asset('js/pages/custom/wizard/wizard-4.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/crud/forms/widgets/select2.js') }}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page)-->
    <script>
        $('.kt_select2_1').select2({
   placeholder: "Select a state"
  });

   $('#check').click(function () {
      if ($('#check').is(':checked') == true) {
          $("#new_parent").show(500);
          $("#initial").hide(500);
      }else{
          $("#new_parent").hide(500);
          $("#initial").show(500);
      }
  });
  $("#new_parent").hide();
  </script>
@endsection
